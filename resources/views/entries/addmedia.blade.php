@extends('layouts.app')

@section('content')
    <div class="col-sm-8">
        <h1>Media: {{ $entry->name}}</h1>
        <hr>

        
        <div class="row">
        @foreach($entry->getMedia('entries') as $eMedia)
        
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            {{ $eMedia('responsive') }}    
          </div>
        </div>
        @endforeach
        </div>
        <hr>
        <h2>Upload New Media</h2>

        {!! Form::model($entry, ['method' => 'PATCH', 'enctype' => 'multipart/form-data', 'action' => ['EntryController@updateMedia',$entry->id]]) !!}
        
        <div class="form-group">
            {!! Form::label('media', 'Upload Images:') !!} 
            {!! Form::file('media', null, ['class'=>'form-control', 'id'=>'media']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Add Media', ['class'=>'btn btn-primary form-control']) !!} 
        </div>
        {!! Form::close() !!}

        @include('layouts.errors')
    </div>
@endsection