@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row links panel-heading">
                        <a href="{{ url('/admin/site-media')}}">Site Media</a>
                    </div>
                    <div class="row links panel-heading">
                        <a href="{{ url('/admin/logo-media')}}">Logos</a>
                    </div>
                    <div class="row links panel-heading">
                        <a href="{{ url('contests')}}">Contests</a>
                    </div>
                    <div class="row links panel-heading">
                        <a href="{{ url('contestants')}}">Contestants</a>
                    </div>
                    <div class="row links panel-heading">        
                        <a href="{{ url('entries')}}">Entries</a>
                    </div>
                    <div class="row links panel-heading">        
                        <a href="{{ url('comments')}}">Comments</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
