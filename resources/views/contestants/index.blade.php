@extends('layouts.app')

@section('content')
        <h1>Contestants</h1>
        <hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Admin</th>
                    <th scope="col">Entries</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($contestants as $c)
                <tr>
                    <th scope="row"><a href="{{ url('/contestants',$c->id) }}">{{ $c->id}}</a></th>
                    <td>{{$c->name}}</td>
                    <td>{{$c->email}}</td>
                    <td>{{$c->getAdminText() }}</td>
                    <td>{{$c->entries()->count()}}
                </tr>
            @endforeach
            </tbody>
        </table>
    
@endsection
