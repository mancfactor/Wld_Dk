@extends ('layouts.app')

@section ('content')

    <div class="col-sm-8">
        <h1 class="t-text-3xl lg:t-text-5xl font-bold t-mb-4">Create Contest</h1>
        <hr>
        {!! Form::open(['url'=>'contests']) !!}
            @include('contests.form',['submitButtonText' => 'Add Contest', 'startDateDefault' => $startDateDefault, 'endDateDefault' => $endDateDefault,])
        {!! Form::close() !!}

        @include('layouts.errors')
    </div>
@endsection