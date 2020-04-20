@extends('layouts.app')

@section('content')
    <h1>Entries</h1>
    <hr>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Contest</th>
                <th scope="col" style="width:100px;">Approved</th>
                <th scope="col" style="width:80px;">Votes</th>
                <th scope="col" style="width:100px;">Comments</th>
                <th scope="col" style="width:80px;">Media</th>
                <th scope="col" >Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($entries as $e)
            <tr>
                <th scope="row"><a href="/entries/{{$e->id}}/edit">{{ $e->name}}</a></th>
                <td>{{ optional($e->contest)->name }}</td>
                <td>{{$e->getApprovedText()}}</td>
                <td>{{ count($e->voters()->get())}}</td>
                <td>{{$e->comments()->count() }}</td>
                <td><a href="{{ url('/entries/media',$e->id) }}">{{ $e->getMedia('entries')->count()}}</td>
                <td>
                {!! Form::select('action', ['#' => 'Select action', '/preview/'.$e->id => 'Preview', '/entries/'.$e->id.'/approve/1' => 'Approve', '/entries/'.$e->id.'/approve/2' => 'Reject',2 => 'Add Media'],0, ['class'=>'sb'.$e->id]) !!}
                    &nbsp; <a id="a{{$e->id}}" href="#" onclick="$(this).attr('href', $('.sb{{$e->id}} option:selected').val());">Go</a></td>
                </tr>
        @endforeach
        </tbody>
    </table>

    {!! Form::open(['method' => 'GET', 'action' => 'EntryController@create']) !!}
    <div class="form-group">
        {!! Form::submit('Add Entry', ['class'=>'btn btn-primary form-control']) !!} 
    </div>
    {!! Form::close() !!}
    
@endsection