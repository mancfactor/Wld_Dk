@extends('layouts.clone.layoutwhite', ['local' => false]) 

@section ('content')
<div class="product__wrapper">
    <nav class="breadcrumbs">
        <small>
            <a href="/">Home</a><span class="breadcrumbs__arrow">
                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-arrow-right" viewBox="0 0 20 38">
                        <path d="M15.932 18.649L.466 2.543A1.35 1.35 0 0 1 0 1.505c0-.41.155-.77.466-1.081A1.412 1.412 0 0 1 1.504 0c.41 0 .756.141 1.038.424l16.992 17.165c.31.283.466.636.466 1.06 0 .423-.155.777-.466 1.06L2.542 36.872a1.412 1.412 0 0 1-1.038.424c-.41 0-.755-.141-1.038-.424A1.373 1.373 0 0 1 0 35.813c0-.423.155-.776.466-1.059L15.932 18.65z" fill="#726D75" fill-rule="evenodd"/>
                </svg>
            </span>
            <a href="//contests.withlovedarling.com" title="">CONTESTS</a>
        </small>
    </nav>
</div>
<h2 class="theme coll-heading">Add Entry ({{$contestOptions[$contestId]}})</h2>
<style>
input {
    border: 1px solid #000;
}
</style>
<section class="col">
    <div class="customer-register">
        {!! Form::open(['url'=>'contest/store-entries', 'enctype' => 'multipart/form-data']) !!}
            @include('front.entries.formw',['submitButtonText' => 'Add Entry', 'contestOptions' => $contestOptions, 'contestDefault' => $contestDefault,])
        {!! Form::close() !!}

        @include('layouts.errors')
    </div>
</section>
@endsection