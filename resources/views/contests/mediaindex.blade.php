@extends('layouts.app')

@section('content')
<h1>Site Media</h1>
<hr>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Thumb</th>
            <th scope="col">Name</th>
            <th scope="col">Filename</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contest->getMedia('site') as $media)
        <tr>
            <td>{{$media->id}}</td>
            <td><img src="{{ $media->getUrl('thumb') }}"></td>
            <td>{{$media->name }}</td>
            <td>{{$media->file_name }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
{!! Form::model($contest, ['method' => 'GET', 'action' => 'ContestController@addMedia']) !!}
<div class="form-group">
    {!! Form::submit('Add Site Media', ['class'=>'btn btn-primary form-control']) !!} 
</div>
{!! Form::close() !!}
@endsection