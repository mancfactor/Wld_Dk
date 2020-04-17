@extends('layouts.app')

@section('content')
    <div class="row">    
        <h1>{{ $contestant->name}}</h1>
        <hr>
    </div>
    <div class="row">
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!} 
            <p>{{ $contestant->name}} </p>
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            <p>{{ $contestant->email}} </p>
        </div>
        <div class="form-group">
            {!! Form::label('phone', 'Phone #') !!}
            <p>{{ $contestant->phone}} </p>
        </div> 
        <div class="form-group">
            {!! Form::label('terms', 'Accepted Marketing Terms:') !!} 
            <p>{{ $contestant->getTermsText() }}</p>
        </div>
        <div class="form-group">
            {!! Form::label('admin', 'Admin:') !!} 
            <p>{{ $contestant->getAdminText() }}</p>
        </div>
        <div class="form-group">
        <h2>Entries ({{$contestant->entries()->count()}}):</h2>
        @unless (!$contestant->entries()->count())
        <ul class="list-group col-md-6">
            @foreach ($contestant->entries as $entry)
            <li class="list-group-item">
                <a target="_BLANK" href="/preview/{{$entry->id}}">{{ $entry->name }}</a></li>
            @endforeach
        </ul>
        @endunless
    </div>

    </div>    
@endsection