@extends('layouts.app')

@section('content')
    <div class="row">    
        <h1>{{ $contest->name}}</h1>
        <p>Runs from {{ $contest->getStartDate()}} to {{ $contest->getEndDate()}}</p> 
        <hr>
    </div>
    <div class="row">
        <div class="form-group">
            {!! Form::label('slogan', 'Slogan:') !!} 
            <p>{{ $contest->slogan}} </p>
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Description:') !!} 
            <p>{{ $contest->description}} </p>
        </div>
        <div class="form-group">
            {!! Form::label('hashtag', 'Hashtag:') !!}
            <p>{{ $contest->hashtag}} </p>
        </div> 
        <div class="form-group">
            {!! Form::label('how_it_work', 'How It Works:') !!} 
            <p>{{ $contest->how_it_work}}</p>
        </div>
        <div class="form-group">
            {!! Form::label('rule', 'Rules:') !!} 
            <p>{{ $contest->rule}}</p>
        </div>
        <div class="form-group">
            {!! Form::label('prize', 'Prizes:') !!} 
            <p>{{ $contest->prize}}</p>
        </div>
    </div>
    <div class="row">
        <h2>Entries:</h2>
        @unless ($contest->entries->isEmpty())
        <ul class="list-group col-md-6">
            @foreach ($contest->entries as $e)
                <li class="list-group-item"><a href="{{ url('/entries',$e->id) }}">{{ $e->name }}</a></li>
            @endforeach
        </ul>
        @endunless
    </div>
    <div class="row">
        <h2>Tags:</h2>
        @unless ($contest->tags->isEmpty())
        <ul class="list-group col-md-6">
            @foreach ($contest->tags as $tag)
                <li class="list-group-item">{{ $tag->name }}</li>
            @endforeach
        </ul>
        @endunless
    </div>
@endsection