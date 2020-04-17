@extends('layouts.clone.layoutb')

@section('content')
<div class="reading-column">
    <div class="col-lg-12">
        <h1>{{ $entry->name}}</h1>
        <hr>
        <div class="row">
            <p>{{ $entry->description}}</p>
        </div>
        <div class="row">
            <h2>{{ $entry->hashtag}}</h2>
        </div>
        
        <!--
        <div class="row">
            <h2>Tags:</h2>
            @unless ($entry->tags->isEmpty())
            <ul class="list-group col-md-6">
                @foreach ($entry->tags as $tag)
                <li class="list-group-item">{{ $tag->name }}</li>
                @endforeach
            </ul>
            @endunless
        </div>
        <br>
        -->
        <div class="row">
            @unless ($entry->getMedia('entries')->isEmpty())
            <ul class="list-group col-md-6">
                @foreach ($entry->getMedia('entries') as $pic)
                    <li class="list-group-item">
                        {{ $pic('responsive') }}    
                    </li>
                @endforeach
            </ul>
            @endunless
        </div>
        <br />
    </div>
</div>
@endsection