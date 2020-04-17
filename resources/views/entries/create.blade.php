@extends ('layouts.app')

@section ('content')

    <div class="col-sm-8">
        <h1>Create Entry</h1>
        <hr>
        {!! Form::open(['url'=>'entries', 'enctype' => 'multipart/form-data']) !!}
            @include('entries.form',['submitButtonText' => 'Add Entry', 'contestOptions' => $contestOptions, 'contestDefault' => $contestDefault,])
        {!! Form::close() !!}

        @include('layouts.errors')
    </div>
@endsection