@extends('layouts.app')

@section('content')
    <div class="col-sm-8">
        <h1>Edit: {{ $contest->name}}</h1>
        <hr>
        {!! Form::model($contest, ['method' => 'PATCH', 'action' => ['ContestController@update',$contest->id]]) !!}
            @include('contests.form',['submitButtonText' => 'Update Contest', 'startDateDefault' => $startDateDefault, 'endDateDefault' => $endDateDefault,])

        {!! Form::close() !!}

        @include('layouts.errors')
    </div>
@endsection