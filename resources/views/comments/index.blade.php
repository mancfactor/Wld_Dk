@extends('layouts.app')

@section('content')
    <h1>Entries</h1>
    <hr>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Entry</th>
                <th scope="col">Comment</th>
                <th scope="col">Status</th>
                <th scope="col" >Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($comments as $c)
            <tr>
                <th scope="row"><a target="_BLANK" href="/preview/{{$c->id}}#comments">{{ $c->commentable_id}}</a></th>
                <td>{{ $c->comment }}</td>
                <td>{{$c->getApprovedText()}}</td>
                <td>
                {!! Form::select('action', ['#' => 'Select action', '/preview/'.$c->commentable_id => 'Preview', '/comments/'.$c->id.'/approve/1' => 'Approve', '/comments/'.$c->id.'/approve/0' => 'Reject'],0, ['class'=>'sb'.$c->id]) !!}
                    &nbsp; <a id="a{{$c->id}}" href="#" onclick="$(this).attr('href', $('.sb{{$c->id}} option:selected').val());">Go</a></td>
                </tr>
        @endforeach
        </tbody>
    </table>

@endsection