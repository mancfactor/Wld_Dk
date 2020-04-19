@extends('layouts.app')

@section('content')
    <div class="col-sm-8">
        <h1>Upload Site Media</h1>
        <hr>
        <br />
        <p>Upload an image to be used on the site.</p>
        <br />
        {!! Form::model($site, ['method' => 'PATCH', 'enctype' => 'multipart/form-data', 'action' => ['SiteController@updateMedia',$site->id]]) !!}
        
        <div class="form-group">
            {!! Form::label('media', 'Upload Image:') !!} 
            {!! Form::file('media', null, ['class'=>'form-control', 'id'=>'media']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Add Site Media', ['class'=>'btn btn-primary form-control']) !!} 
        </div>
        {!! Form::close() !!}

        @include('layouts.errors')
    </div>
@endsection