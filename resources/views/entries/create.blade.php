@extends ('layouts.app')

@section ('content')

    <div class="col-sm-8">
        <h1 class="t-text-3xl lg:t-text-5xl font-bold t-mb-4">Create Entry</h1>
        <hr>
        {!! Form::open(['url'=>'entries', 'enctype' => 'multipart/form-data']) !!}
            @include('entries.form',['submitButtonText' => 'Add Entry', 'contestOptions' => $contestOptions, 'contestDefault' => $contestDefault,])
        {!! Form::close() !!}

        @include('layouts.errors')
    </div>
@endsection