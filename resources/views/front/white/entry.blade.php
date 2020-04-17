@extends('layouts.clone.layoutwhite', ['local' => false]) 
@section('content')
@include('front.white.entrydetail', ['entry' => $entry])
@endsection
