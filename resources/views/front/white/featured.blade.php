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
<h2 class="theme coll-heading">FEATURED ENTRIES</h2>


    <div id="shopify-section-collection" class="shopify-section">
        <!-- /sections/collections.liquid -->
        <section class="collection collection-necklaces" data-section-id="collection" data-section-type="collection" data-reviews="true" data-swatches="true" data-sort="false">
            <div class="product-grid" id="CollectionLoop">
                @foreach($entries as $entry)
                <div class="product-item small--one-half medium--one-half large-up--one-quarter">
                    <a id="product-12774368051299" class="product-link" href="/product/{{ $entry->id }}" aria-label="{{ $entry->name }}">

                        <div class="product-item__image  double__image">
                            @foreach ($entry->getMedia('entries') as $pic)
                            <div class="product-item__bg aos-init aos-animate lazyloaded" data-aos="img-in" data-aos-anchor=".product-grid" data-aos-delay="0" data-aos-duration="800" data-aos-easing="ease-out-quart" data-bgset="{{ $pic->getUrl('_180') }} 180w 180h,
                                {{ $pic->getUrl('_360') }} 360w 360h,
                                {{ $pic->getUrl('_540') }} 540w 540h,
                                {{ $pic->getUrl('_720') }} 720w 720h,
                                {{ $pic->getUrl('_900') }} 900w 900h,
                                {{ $pic->getUrl('_1080') }} 1080w 1080h,
                                {{ $pic->getUrl('_1296') }}6 1296w 1296h,
                                {{ $pic->getUrl('_1512') }} 1512w 1512h,
                                {{ $pic->getUrl('_1728') }} 1728w 1728h,
                                {{ $pic->getUrl('_2048') }} 2048w 2048h" style="background-image: url(&quot;{{ $pic->getUrl('_540') }}&quot;);">
                                <picture style="display: none;">
                                    <source data-srcset="{{ $pic->getUrl('_180') }} 180w 180h,
                                {{ $pic->getUrl('_360') }} 360w 360h,
                                {{ $pic->getUrl('_540') }} 540w 540h,
                                {{ $pic->getUrl('_720') }} 720w 720h,
                                {{ $pic->getUrl('_900') }} 900w 900h,
                                {{ $pic->getUrl('_1080') }} 1080w 1080h,
                                {{ $pic->getUrl('_1296') }}6 1296w 1296h,
                                {{ $pic->getUrl('_1512') }} 1512w 1512h,
                                {{ $pic->getUrl('_1728') }} 1728w 1728h,
                                {{ $pic->getUrl('_2048') }} 2048w 2048h" sizes="509px" srcset="{{ $pic->getUrl('_180') }} 180w 180h,
                                {{ $pic->getUrl('_360') }} 360w 360h,
                                {{ $pic->getUrl('_540') }} 540w 540h,
                                {{ $pic->getUrl('_720') }} 720w 720h,
                                {{ $pic->getUrl('_900') }} 900w 900h,
                                {{ $pic->getUrl('_1080') }} 1080w 1080h,
                                {{ $pic->getUrl('_1296') }}6 1296w 1296h,
                                {{ $pic->getUrl('_1512') }} 1512w 1512h,
                                {{ $pic->getUrl('_1728') }} 1728w 1728h,
                                {{ $pic->getUrl('_2048') }} 2048w 2048h">
                                <img alt="" class="lazyautosizes lazyloaded" data-sizes="auto" data-parent-fit="cover" sizes="509px"></picture>
                            </div>
                            <div class="slideup">
                                <span style="text-transform: uppercase; letter-spacing: 2px; font-size: 0.76em; font-family: \"Century Gothic\",sans-serif;  font-weight: 400 !important;"> Vote | Comment</span>
                            </div>
                            <div class="product-item__bg__under lazyloaded" data-bgset="{{ $pic->getUrl('_180') }} 180w 180h,
                                {{ $pic->getUrl('_360') }} 360w 360h,
                                {{ $pic->getUrl('_540') }} 540w 540h" style="background-image: url(&quot;{{ $pic->getUrl() }}&quot;);">
                                <picture style="display: none;">
                                    <source data-srcset="{{ $pic->getUrl('_180') }} 180w 180h,
                                {{ $pic->getUrl('_360') }} 360w 360h,
                                {{ $pic->getUrl('_540') }} 480w 480h" sizes="509px" srcset="{{ $pic->getUrl('_180') }} 180w 180h,
                                {{ $pic->getUrl('_360') }} 360w 360h,
                                {{ $pic->getUrl('_540') }} 480w 480h">
                                <img alt="" class="lazyautosizes lazyloaded" data-sizes="auto" data-parent-fit="cover" sizes="509px"></picture>
                            </div>
                            

                            
                        </div>

                        <noscript>
                            <div class="product-item__image no-js-image" style="background-image:url('{{ $pic->getUrl('_540') }}'); background-size: contain; background-position: center center; background-repeat: no-repeat;">
                            </div>
                        </noscript>
                            @endforeach
                        <div class="product-information aos-init aos-animate" data-aos="fade-up" data-aos-anchor=".product-grid" data-aos-delay="0" data-aos-duration="100">
                            <!--<span class="spr-badge" id="spr_badge_1464215666787" data-rating="0.0"><span class="spr-starrating spr-badge-starrating">
                                <i class="spr-icon spr-icon-star-empty"></i>
                                <i class="spr-icon spr-icon-star-empty"></i>
                                <i class="spr-icon spr-icon-star-empty"></i>
                                <i class="spr-icon spr-icon-star-empty"></i>
                                <i class="spr-icon spr-icon-star-empty"></i>
                            </span>
                            -->
                            <h3 class="title">{{ $entry->name}}</h3>
                            <span class="price">
                                <small>By</small> {{ $entry->designer}}
                            </span>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </section>
    </div>

@endsection