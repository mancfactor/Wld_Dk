@extends ('layouts.app')

@section ('content')

    <div class="col-sm-8">
        <h1>Create Contest</h1>
        <hr>
        {!! Form::open(['url'=>'contests']) !!}
            @include('contests.form',['submitButtonText' => 'Add Contest', 'startDateDefault' => $startDateDefault, 'endDateDefault' => $endDateDefault,])
        {!! Form::close() !!}

        @include('layouts.errors')
    </div>
@endsection