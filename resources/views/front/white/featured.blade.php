@extends('layouts.clone.layoutwhite', ['local' => false]) 

@section('content')
<div class="product__wrapper">
    <nav class="breadcrumbs">
        <small>
            <a href="https://withlovedarling.com">Home</a><span class="breadcrumbs__arrow">
                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-arrow-right" viewBox="0 0 20 38">
                        <path d="M15.932 18.649L.466 2.543A1.35 1.35 0 0 1 0 1.505c0-.41.155-.77.466-1.081A1.412 1.412 0 0 1 1.504 0c.41 0 .756.141 1.038.424l16.992 17.165c.31.283.466.636.466 1.06 0 .423-.155.777-.466 1.06L2.542 36.872a1.412 1.412 0 0 1-1.038.424c-.41 0-.755-.141-1.038-.424A1.373 1.373 0 0 1 0 35.813c0-.423.155-.776.466-1.059L15.932 18.65z" fill="#726D75" fill-rule="evenodd"/>
                </svg>
            </span>
            <a href="//contests.withlovedarling.com" title="">CONTESTS</a>
            <span class="breadcrumbs__arrow">
                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-arrow-right" viewBox="0 0 20 38">
                        <path d="M15.932 18.649L.466 2.543A1.35 1.35 0 0 1 0 1.505c0-.41.155-.77.466-1.081A1.412 1.412 0 0 1 1.504 0c.41 0 .756.141 1.038.424l16.992 17.165c.31.283.466.636.466 1.06 0 .423-.155.777-.466 1.06L2.542 36.872a1.412 1.412 0 0 1-1.038.424c-.41 0-.755-.141-1.038-.424A1.373 1.373 0 0 1 0 35.813c0-.423.155-.776.466-1.059L15.932 18.65z" fill="#726D75" fill-rule="evenodd"/>
                </svg>
            </span>
            <a href="//contests.withlovedarling.com/featured" title="Featured Entries">FEATURED ENTRIES</a>
        </small>
    </nav>
</div>
<h2 class="t-m-0 t-p-4 t-text-center t-text-base sm:t-text-xl lg:t-text-3xl xl:t-text-4xl">FEATURED ENTRIES ({{$entries->total()}})</h2>
<div class="t-flex t-flex-wrap wldpink t-antialiased t-text-gray-900">
	@foreach($entries as $entry)
		@foreach ($entry->getMedia('entries') as $pic)
			<div class="t-mt-6 t-mb-6 t-px-6 t-max-w-xl t-w-full sm:t-w-1/2 lg:t-w-1/3 t-content-center" >
				<div class="t-bg-white t-rounded-lg t-overflow-hidden t-text-center">
					<a id="product-{{ $entry->id }}" class="product-link" href="/product/{{ $entry->id }}" aria-label="{{ $entry->name }}">
						<div class="t-relative t-pb-2/3" >
							<img class="t-top-0 t-h-full t-w-full t-object-cover t-object-center" src="{{$pic->getUrl('thumb')}}" srcset="{{$pic->getSrcSet('responsive')}}"  alt="{{$entry->name}}"  />	
						</div>
						<div class="t-p-4">
							<div class="t-flex t-justify-between t-items-center ">
								<div class="t-text-xs xl:t-text-base t-w-1/6 "><a href="/product/{{$entry->id}}#comments">Comments <br / >({{ count($entry->comments()->get())}})</a></div> 
								<div class="t-flex-none t-w-2/3">
									<h4 class="t-text-xs xl:t-text-2xl t-font-bold t-m-0 t-leading-tight">{{$entry->name}}</h4>
									<div class="t-text-xs xl:t-text-base t-uppercase t-font-semibold t-tracking-wide t-text-gray-600">By {{ $entry->designer}}</div>
								</div>
								<div class="t-text-xs xl:t-text-base t-w-1/6"><a href="/product/{{$entry->id}}#votes">Votes <br / >(
									@isset($entries_votes[$entry->id])
										{{$entries_votes[$entry->id]}}
									@else
										0
									@endisset)</a></div>
							</div>
						</div>
					</a>
				</div>
			</div>
		@endforeach
	@endforeach
	
</div>
@if($entries->total() > $entries->perPage())
<div class="t-m-0 t-p-2 t-text-center t-text-base sm:t-text-xl lg:t-text-3xl xl:t-text-4xl t-text-gray-800 t-font-bold">{{ $entries->onEachSide(2)->links('vendor.pagination.default')}}</div>
@endif
@endsection