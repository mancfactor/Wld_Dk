@extends('layouts.app')

@section('content')
<h1 class="t-text-3xl lg:t-text-5xl font-bold t-mb-4">Entries</h1>
<hr>
<table class="t-table-auto t-bg-white t-m-4 t-w-full t-border-gray-500">
    <thead class="thead-dark">
        <tr>
            <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col">Entry</th>
            <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col">Comment</th>
            <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col">Status</th>
            <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col" >Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($comments as $c)
        <tr class="t-text-center">
            <td class="t-border t-border-gray-500 t-px-1 t-py-1" scope="row"><a target="_BLANK" href="/preview/{{$c->id}}#comments">{{ $c->commentable_id}}</a></th>
            <td class="t-border t-border-gray-500 t-px-1 t-py-1">{{ $c->comment }}</td>
            <td class="t-border t-border-gray-500 t-px-1 t-py-1">{{$c->getApprovedText()}}</td>
            <td class="t-border t-border-gray-500 t-px-1 t-py-1">
            {!! Form::select('action', ['#' => 'Select action', '/preview/'.$c->commentable_id => 'Preview', '/comments/'.$c->id.'/approve/1' => 'Approve', '/comments/'.$c->id.'/approve/0' => 'Reject'],0, ['class'=>'sb'.$c->id.' t-border t-border-gray-500']) !!}
                &nbsp; <a id="a{{$c->id}}" href="#" onclick="$(this).attr('href', $('.sb{{$c->id}} option:selected').val());">Go</a></td>
            </tr>
    @endforeach
    </tbody>
</table>
<div class="t-m-0 t-p-4 t-text-center t-text-base sm:t-text-xl lg:t-text-3xl xl:t-text-4xl t-text-gray-800 t-font-bold">{{ $comments->onEachSide(2)->links('vendor.pagination.default')}}</div>

@endsection