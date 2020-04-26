@extends('layouts.clone.layoutwhite', ['local' => false]) 

@section('content')
<div class="product__wrapper">
    <nav class="breadcrumbs">
        <small>
            <a href="https://contests.withlovedarling.com">Home</a>
            <span class="breadcrumbs__arrow">
                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-arrow-right" viewBox="0 0 20 38">
                        <path d="M15.932 18.649L.466 2.543A1.35 1.35 0 0 1 0 1.505c0-.41.155-.77.466-1.081A1.412 1.412 0 0 1 1.504 0c.41 0 .756.141 1.038.424l16.992 17.165c.31.283.466.636.466 1.06 0 .423-.155.777-.466 1.06L2.542 36.872a1.412 1.412 0 0 1-1.038.424c-.41 0-.755-.141-1.038-.424A1.373 1.373 0 0 1 0 35.813c0-.423.155-.776.466-1.059L15.932 18.65z" fill="#726D75" fill-rule="evenodd"/>
                </svg>
            </span>
            <a href="/" title="Contests">CONTESTS</a>
            <span class="breadcrumbs__arrow">
                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-arrow-right" viewBox="0 0 20 38">
                        <path d="M15.932 18.649L.466 2.543A1.35 1.35 0 0 1 0 1.505c0-.41.155-.77.466-1.081A1.412 1.412 0 0 1 1.504 0c.41 0 .756.141 1.038.424l16.992 17.165c.31.283.466.636.466 1.06 0 .423-.155.777-.466 1.06L2.542 36.872a1.412 1.412 0 0 1-1.038.424c-.41 0-.755-.141-1.038-.424A1.373 1.373 0 0 1 0 35.813c0-.423.155-.776.466-1.059L15.932 18.65z" fill="#726D75" fill-rule="evenodd"/>
                </svg>
            </span>
            <a href="/enter-contest" title="Enter Contest">CONTEST ENTRIES</a>
        </small>
    </nav>
</div>
<div class="t-m-0 t-justify-center t-align-center t-text-center"> 
    <hr style="border: 1px solid #545454;margin: auto;margin-top:20px;margin-bottom:20px;height:0;width: 30%;" />
    <p class="t-text-center t-font-bold t-mt-4 t-mb-4 t-text-lg sm:t-text-xl lg:t-text-3xl xl:t-text-4xl">Submit your design,<br />and tell us it's story.</p>
    <hr style="border: 1px solid #545454;margin: auto;margin-top:20px;margin-bottom:20px;height:0;width: 30%;" />
    <p><br /></p>
    <p></p>
    <p style="text-align: center;">
        <a class="btn btn--large btn--secondary btn--neutral caps" href="/contest/add-entry">
            <span class="tiny">UPLOAD YOUR DESIGN</span>
        </a>
    </p>

    <h2 class="t-m-0 t-p-4 t-text-center t-text-base sm:t-text-xl lg:t-text-3xl xl:t-text-4xl">CONTEST ENTRIES ({{$entries->total()}})</h2>
    <div class="t-flex t-content-center t-px-10 t-text-xs sm:t-text-sm wldpink">
        @if(count($entries))
        <table class="t-table-auto t-m-4 t-w-full t-border-gray-500">
            <thead>
                <tr>
                    <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col">Image</th>
                    <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col">Name</th>
                    <th class="t-border t-border-gray-500 t-px-1 t-py-1" scope="col">Status</th>
                    <th class="t-border t-border-gray-500 t-px-1 t-py-1 t-hidden sm:t-table-cell" scope="col">Designer</th>
                    <th class="t-border t-border-gray-500 t-px-1 t-py-1 t-hidden sm:t-table-cell" scope="col">Votes</th>
                    <th class="t-border t-border-gray-500 t-px-1 t-py-1 t-hidden sm:t-table-cell" scope="col">Comments</th>
                </tr>
            </thead>
            <tbody>
            
            @foreach ($entries as $e)
                <tr class="items-center">
                    <td class="t-border t-border-gray-400 t-px-1 t-py-1">@unless ($e->getMedia('entries')->isEmpty())
                        <a href="{{ url('/preview', $e->id) }}">
                            <img class="t-h-16 sm:t-h-32 t-object-cover t-object-fit" src="{{ $e->getMedia('entries')[0]->getUrl('responsive') }}">    
                        </a>
                        @endunless
                    </td>
                    <td class="t-border t-border-gray-500 t-px-1 t-py-1" scope="row"><a href="{{ url('/preview',$e->id) }}">{{ $e->name}}</a></td>
                    <td class="t-border t-border-gray-500 t-px-1 t-py-1">{{$e->getApprovedText()}}</td>
                    <td class="t-border t-border-gray-500 t-px-1 t-py-1 t-hidden sm:t-table-cell">{{ $e->designer}}</td>
                    <td class="t-border t-border-gray-500 t-px-1 t-py-1 t-hidden sm:t-table-cell">{{count($e->voters()->get())}}</td>
                    <td class="t-border t-border-gray-500 t-px-1 t-py-1 t-hidden sm:t-table-cell">{{$e->comments()->count()}}</td>
                </tr>
            @endforeach
            
            </tbody>
        </table>
        @else
        <p>No entires yet</p>
        @endif   
    </div>
</div>
<div class="t-m-0 t-p-4 t-text-center t-text-base sm:t-text-xl lg:t-text-3xl xl:t-text-4xl t-text-gray-800 t-font-bold">{{ $entries->onEachSide(2)->links('vendor.pagination.default')}}</div>
   
@endsection
