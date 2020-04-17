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
<div id="shopify-section-index-image-with-text" class="shopify-section"> 
        <hr style="border: 1px solid #545454;margin: auto;margin-top:20px;margin-bottom:20px;height:0;width: 30%;" />
        <p style="text-align:center;font-weight:bold;margin-top:20px;margin-bottom:20px;font-size:36px;">Submit your design,<br />and tell us it's story.</p>
        <hr style="border: 1px solid #545454;margin: auto;margin-top:20px;margin-bottom:20px;height:0;width: 30%;" />
        <p><br /></p>
        <p></p>
        <p style="text-align: center;">
            <a class="btn btn--large btn--secondary btn--neutral caps" href="/contest/add-entry">
                <span class="tiny">UPLOAD YOUR DESIGN</span>
            </a>
        </p>
        <h2 class="theme coll-heading">CONTEST ENTRIES</h2>
         <div class="opposing-items">
            @if(count($entries))
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" style="width:200px;text-align:left;">Image</th>
                        <th scope="col" style="width:80px;text-align:left;">Name</th>
                        <th scope="col" style="width:80px;text-align:left;">Designer</th>
                        <th scope="col" style="width:60px;text-align:left;">Status</th>
                        <th scope="col" style="width:60px;text-align:left;">Votes</th>
                        <th scope="col" style="width:60px;text-align:left;">Comments</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($entries as $e)
                    <tr>
                        
                        <td>@unless ($e->getMedia('entries')->isEmpty())
                            <a href="{{ url('/preview', $e->id) }}">
                            <img src="{{ $e->getMedia('entries')[0]->getUrl('thumb') }}">    
                            </a>
                            @endunless
                        </td>
                        <td scope="row"><a href="{{ url('/preview',$e->id) }}">{{ $e->name}}</a></td>
                        <td>{{$e->designer}}</td>
                        <td>
                        @if ($e->approved == 2)
                            Rejected
                        @elseif ($e->approved == 1)
                            Approved
                        @else
                            Pending
                        @endif
                        </td>
                        <td>{{count($e->voters()->get())}}</td>
                        <td>{{$e->comments()->count()}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @else
            <p>No entires yet</p>
            @endif
        </div>
    </div>
   
@endsection
