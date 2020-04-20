@extends('layouts.app')

@section('content')
<h1>Contests</h1>
<hr>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Hashtag</th>
            <th scope="col">Active</th>
            <th scope="col">Start Date</th>
            <th scope="col">Submit Date</th>
            <th scope="col">Vote Date</th>
            <th scope="col">End Date</th>
            <th scope="col">Entries</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($contests as $c)
        <tr>
            <th scope="row"><a href="/contests/{{$c->id}}/edit">{{ $c->name}}</a></th>
            <td>{{$c->hashtag}}</td>
            <td>{{$c->getActiveText() }}</td>
            <td>{{$c->getStartDate() }}</td>
            <td>{{$c->getSubmitDate() }}</td>
            <td>{{$c->getVoteDate() }}</td>
            <td>{{$c->getEndDate() }}</td>
            <td><a href="/entries/">{{ $c->entries()->count()}}</a></td>
        </tr>
    @endforeach
    </tbody>
</table>

{!! Form::open(['method' => 'GET', 'action' => 'ContestController@create']) !!}
<div class="form-group">
    {!! Form::submit('Add Contest', ['class'=>'btn btn-primary form-control']) !!} 
</div>
{!! Form::close() !!}
@endsection