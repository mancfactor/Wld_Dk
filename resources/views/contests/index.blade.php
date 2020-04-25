@extends('layouts.app')

@section('content')
<h1 class="t-text-3xl lg:t-text-5xl font-bold t-mb-4">Contests</h1>
<hr>
<table class="t-table-auto t-bg-white t-m-4 t-w-full t-border-gray-500">
    <thead>
        <tr>
            <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col">Name</th>
            <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col">Hashtag</th>
            <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col">Active</th>
            <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col">Start Date</th>
            <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col">Submit Date</th>
            <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col">Vote Date</th>
            <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col">End Date</th>
            <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col">Entries</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($contests as $c)
        <tr class="t-text-center">
            <td class="t-border t-border-gray-500 t-px-1 t-py-1" scope="row"><a href="/contests/{{$c->id}}/edit">{{ $c->name}}</a></th>
            <td class="t-border t-border-gray-500 t-px-1 t-py-1" >{{$c->hashtag}}</td>
            <td class="t-border t-border-gray-500 t-px-1 t-py-1" >{{$c->getActiveText() }}</td>
            <td class="t-border t-border-gray-500 t-px-1 t-py-1" >{{$c->getStartDate() }}</td>
            <td class="t-border t-border-gray-500 t-px-1 t-py-1" >{{$c->getSubmitDate() }}</td>
            <td class="t-border t-border-gray-500 t-px-1 t-py-1" >{{$c->getVoteDate() }}</td>
            <td class="t-border t-border-gray-500 t-px-1 t-py-1" >{{$c->getEndDate() }}</td>
            <td class="t-border t-border-gray-500 t-px-1 t-py-1" ><a href="/entries/">{{ $c->entries()->count()}}</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="t-m-0 t-p-4 t-text-center t-text-base sm:t-text-xl lg:t-text-3xl xl:t-text-4xl t-text-gray-800 t-font-bold">{{ $contests->onEachSide(2)->links('vendor.pagination.default')}}</div>
{!! Form::open(['method' => 'GET', 'action' => 'ContestController@create']) !!}
<div class="t-m-0 t-p-4 t-text-center t-text-base sm:t-text-xl lg:t-text-3xl xl:t-text-4xl t-text-gray-800 t-font-bold">
    {!! Form::submit('Add Contest', ['class'=>'btn btn-primary form-control']) !!} 
</div>
{!! Form::close() !!}
@endsection