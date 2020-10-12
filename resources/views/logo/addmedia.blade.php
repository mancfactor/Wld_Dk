@extends('layouts.app')

@section('content')
    <div class="col-sm-8">
        <h1 class="t-text-3xl lg:t-text-5xl font-bold t-mb-4">Upload Logo Media</h1>
        <hr />
        <br />
        <p class="t-text-2xl lg:t-text-4xl t-mb-4">Upload an image to be used as a logo. MAX HEIGHT 200px</p>
        <br />
        {!! Form::model($logo, ['method' => 'PATCH', 'enctype' => 'multipart/form-data', 'action' => ['LogoController@updateMedia',$logo->id]]) !!}
        
        <div class="form-group">
            {!! Form::label('media', 'Upload Image:',['class'=>"t-text-2xl lg:t-text-4xl t-mb-4"]) !!} 
            {!! Form::file('media', null, ['class'=>'form-control', 'id'=>'media']) !!}
        </div>
        <div class="t-m-0 t-p-4 t-text-center t-text-base sm:t-text-xl lg:t-text-3xl xl:t-text-4xl t-text-gray-800">
            {!! Form::submit('Add Logo Media', ['class'=>'btn btn-primary form-control']) !!} 
        </div>
        {!! Form::close() !!}

        @include('layouts.errors')
    </div>
@endsection