@extends('layouts.app')

@section('content')
    <div class="col-sm-8">
        <h1>Edit: {{ $entry->name}}</h1>
        <hr>
        {!! Form::model($entry, ['method' => 'PATCH', 'action' => ['EntryController@update',$entry->id]]) !!}
            @include('entries.form',['submitButtonText' => 'Update Entry', 'contestOptions' => $contestOptions, 'contestDefault' => $contestDefault,])

        {!! Form::close() !!}

        @include('layouts.errors')
    </div>
@endsection