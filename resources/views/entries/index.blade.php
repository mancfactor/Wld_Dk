@extends('layouts.app')

@section('content')
    <h1 class="t-text-3xl lg:t-text-5xl font-bold t-mb-4">Entries</h1>
    <hr>
    <table class="t-table-auto t-bg-white t-m-4 t-w-full t-border-gray-500">
        <thead class="thead-dark">
            <tr>
                <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col">Name</th>
                <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col">Contest</th>
                <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col" style="width:100px;">Approved</th>
                <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col" style="width:80px;">Votes</th>
                <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col" style="width:100px;">Comments</th>
                <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col" style="width:80px;">Media</th>
                <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col" >Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($entries as $e)
            <tr class="t-text-center">
                <td class="t-border t-border-gray-500 t-px-1 t-py-1" scope="row"><a href="/entries/{{$e->id}}/edit">{{ $e->name}}</a></td>
                <td class="t-border t-border-gray-500 t-px-1 t-py-1">{{ optional($e->contest)->name }}</td>
                <td class="t-border t-border-gray-500 t-px-1 t-py-1">{{$e->getApprovedText()}}</td>
                <td class="t-border t-border-gray-500 t-px-1 t-py-1">{{ count($e->voters()->get())}}</td>
                <td class="t-border t-border-gray-500 t-px-1 t-py-1">{{$e->comments()->count() }}</td>
                <td class="t-border t-border-gray-500 t-px-1 t-py-1"><a href="{{ url('/entries/media',$e->id) }}">{{ $e->getMedia('entries')->count()}}</td>
                <td class="t-border t-border-gray-500 t-px-1 t-py-1">
                {!! Form::select('action', ['#' => 'Select action', '/preview/'.$e->id => 'Preview', '/entries/'.$e->id.'/approve/1' => 'Approve', '/entries/'.$e->id.'/approve/2' => 'Reject','/entries/media/'.$e->id => 'Add Media'],0, ['class'=> 'sb'.$e->id.' t-border t-border-gray-900']) !!}
                    &nbsp; <a id="a{{$e->id}}" href="#" onclick="$(this).attr('href', $('.sb{{$e->id}} option:selected').val());">Go</a></td>
                </tr>
        @endforeach
        </tbody>
    </table>
    <div class="t-m-0 t-p-4 t-text-center t-text-base sm:t-text-xl lg:t-text-3xl xl:t-text-4xl t-text-gray-800 t-font-bold">{{ $entries->onEachSide(2)->links('vendor.pagination.default')}}</div>
    {!! Form::open(['method' => 'GET', 'action' => 'EntryController@create']) !!}
    <div class="t-m-0 t-p-4 t-text-center t-text-base sm:t-text-xl lg:t-text-3xl xl:t-text-4xl t-text-gray-800 ">
        {!! Form::submit('Add Entry', ['class'=>'btn btn-primary form-control']) !!} 
    </div>
    {!! Form::close() !!}
    
@endsection