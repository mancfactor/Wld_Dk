@extends('layouts.clone.layoutwhite', ['local' => false]) 
@section('content')
@include('front.white.steps', ['contest', $contest])
<h2 class="theme coll-heading">FROM IDEA TO CREATION</h2>
@include('front.white.video')
@include('front.white.featuredintro')
@include('front.white.upload')
@include('front.white.howtoenter', ['contest', $contest])
@include('front.white.rules', ['contest', $contest])
@include('front.white.prizes')
@include('front.white.faq', ['contest', $contest])
@endsection