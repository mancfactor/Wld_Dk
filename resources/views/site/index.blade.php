@extends('layouts.app')

@section('content')
<h1 class="t-text-3xl lg:t-text-5xl font-bold t-mb-4">Site Media</h1>
<hr />

<table class="t-table-auto t-bg-white t-m-4 t-w-full t-border-gray-500">
    <thead>
        <tr>
            <th  class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col">Id</th>
            <th  class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col"scope="col">Thumb</th>
            <th  class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col"scope="col">Name</th>
            <th  class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col"scope="col">Filename</th>
        </tr>
    </thead>
    <tbody>
        @foreach($site->getMedia('site') as $media)
        <tr>
            <td  class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col">{{$media->id}}</td>
            <td class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col"><a target="_BLANK" href="{{ $media->getUrl('responsive') }}"><img class="t-h-64 t-object-center t-object-cover" src="{{ $media->getUrl('responsive') }}"></a></td>
            <td class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col">{{$media->name }}</td>
            <td class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col">{{$media->file_name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<br />
{!! Form::model($site, ['method' => 'GET', 'action' => 'SiteController@addMedia']) !!}
<div class="t-m-0 t-p-4 t-text-center t-text-base sm:t-text-xl lg:t-text-3xl xl:t-text-4xl t-text-gray-800 ">
    {!! Form::submit('Add Site Media', ['class'=>'btn btn-primary form-control']) !!} 
</div>
{!! Form::close() !!}
@endsection