@extends('layouts.app')

@section('content')
    <h1>Entries</h1>
    <hr>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Contest</th>
                <th scope="col">Hashtag</th>
                <th scope="col">Approved</th>
                <th scope="col">Votes</th>
                <th scope="col">Comments</th>
                <th scope="col">Media</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($entries as $e)
            <tr>
                <th scope="row"><a href="{{ url('/entries',$e->id) }}">{{ $e->name}}</a></th>
                <td>{{ optional($e->contest)->name }}</td>
                <td>{{$e->hashtag}}</td>
                <td>
                @if ($e->approved == 2)
                    Rejected
                @elseif ($e->approved == 1)
                    Approved
                @else
                    Pending
                @endif
                </td>
                <td>0</td>
                <td>0</td>
                <td><a href="{{ url('/entries/media',$e->id) }}">{{ $e->getMedia('entries')->count()}}</td>
                <td style='float:left;'>{!! Form::select('action', ['#' => 'Select action', '/entries/'.$e->id.'/approve/1' => 'Approve', '/entries/'.$e->id.'/approve/2' => 'Reject',2 => 'Add Media'],0, ['class'=>'form-control sb'.$e->id]) !!}
                    <a id="a{{$e->id}}" href="#" onclick="$(this).attr('href', $('.sb{{$e->id}} option:selected').val());">Go</a></td>
                </tr>
        @endforeach
        </tbody>
    </table>

@endsection