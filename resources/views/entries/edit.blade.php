@extends('layouts.app')

@section('content')
    <div class="col-sm-8">
        <h1 class="t-text-3xl lg:t-text-5xl font-bold t-mb-4">Edit: {{ $entry->name}}</h1>
        <hr>
        {!! Form::model($entry, ['method' => 'PATCH', 'action' => ['EntryController@update',$entry->id]]) !!}
            @include('entries.form',['submitButtonText' => 'Update Entry', 'contestOptions' => $contestOptions, 'contestDefault' => $contestDefault,])

        {!! Form::close() !!}

        @include('layouts.errors')
    </div>
@endsection