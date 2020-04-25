@extends('layouts.app')

@section('content')
    <h1 class="t-text-3xl lg:t-text-5xl font-bold t-mb-4">Contestants</h1>
    <hr>
    <table class="t-table-auto t-bg-white t-m-4 t-w-full t-border-gray-500">
        <thead class="thead-dark">
            <tr>
                <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col">#</th>
                <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col">Name</th>
                <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col">Email</th>
                <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col">Admin</th>
                <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col">Entries</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($contestants as $c)
            <tr class="t-text-center">
                <td class="t-border t-border-gray-500 t-px-1 t-py-1" scope="row"><a href="{{ url('/contestants',$c->id) }}">{{ $c->id}}</a></td>
                <td class="t-border t-border-gray-500 t-px-1 t-py-1" >{{$c->name}}</td>
                <td class="t-border t-border-gray-500 t-px-1 t-py-1" >{{$c->email}}</td>
                <td class="t-border t-border-gray-500 t-px-1 t-py-1" >{{$c->getAdminText() }}</td>
                <td class="t-border t-border-gray-500 t-px-1 t-py-1" >{{$c->entries()->count()}}
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="t-m-0 t-p-4 t-text-center t-text-base sm:t-text-xl lg:t-text-3xl xl:t-text-4xl t-text-gray-800 t-font-bold">{{ $contestants->onEachSide(2)->links('vendor.pagination.default')}}</div>
@endsection
