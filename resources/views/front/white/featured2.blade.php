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

                            <div class="slideup">
                                <div class="product__sharing">
                                    <!-- /snippets/social-sharing.liquid -->
                                    <div class="sharing" style="text-align: center;">
                                        <a class="share share--facebook" target="_blank" href="//www.facebook.com/sharer.php?u=https://contests.withlovedarling.com/entry/{{ $entry->id }}">
                                            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-facebook" viewBox="0 0 20 20">
                                                <path fill="#444" d="M18.05.811q.439 0 .744.305t.305.744v16.637q0 .439-.305.744t-.744.305h-4.732v-7.221h2.415l.342-2.854h-2.757v-1.83q0-.659.293-1t1.073-.342h1.488V3.762q-.976-.098-2.171-.098-1.634 0-2.635.964t-1 2.72V9.47H7.951v2.854h2.415v7.221H1.413q-.439 0-.744-.305t-.305-.744V1.859q0-.439.305-.744T1.413.81H18.05z" />
                                            </svg>
                                            <span aria-hidden="true">Share</span>
                                            <span class="visually-hidden">Share on Facebook</span>
                                        </a>
                                        <a class="share share--twitter" target="_blank" href="//twitter.com/share?text=Golden%20Star%20Earrings&amp;url=https://contests.withlovedarling.com/entry/{{ $entry->id }}">
                                            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-twitter" viewBox="0 0 20 20">
                                                <path fill="#444" d="M19.551 4.208q-.815 1.202-1.956 2.038 0 .082.02.255t.02.255q0 1.589-.469 3.179t-1.426 3.036-2.272 2.567-3.158 1.793-3.963.672q-3.301 0-6.031-1.773.571.041.937.041 2.751 0 4.911-1.671-1.284-.02-2.292-.784T2.456 11.85q.346.082.754.082.55 0 1.039-.163-1.365-.285-2.262-1.365T1.09 7.918v-.041q.774.408 1.773.448-.795-.53-1.263-1.396t-.469-1.864q0-1.019.509-1.997 1.487 1.854 3.596 2.924T9.81 7.184q-.143-.509-.143-.897 0-1.63 1.161-2.781t2.832-1.151q.815 0 1.569.326t1.284.917q1.345-.265 2.506-.958-.428 1.386-1.732 2.18 1.243-.163 2.262-.611z" />
                                            </svg>
                                            <span aria-hidden="true">Tweet</span>
                                            <span class="visually-hidden">Tweet on Twitter</span>
                                        </a>
                                        <a class="share share--pinterest" target="_blank" href="//pinterest.com/pin/create/button/?url=https://contests.withlovedarling.com/entry/{{ $entry->id }}&amp;media=https://contests.withlovedarling.com/{{ $entry->getMedia('entries')[0]->getUrl() }}&amp;description={{ urlencode($entry->name) }}">
                                            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-pinterest" viewBox="0 0 20 20">
                                                <path fill="#444" d="M9.958.811q1.903 0 3.635.744t2.988 2 2 2.988.744 3.635q0 2.537-1.256 4.696t-3.415 3.415-4.696 1.256q-1.39 0-2.659-.366.707-1.147.951-2.025l.659-2.561q.244.463.903.817t1.39.354q1.464 0 2.622-.842t1.793-2.305.634-3.293q0-2.171-1.671-3.769t-4.257-1.598q-1.586 0-2.903.537T5.298 5.897 4.066 7.775t-.427 2.037q0 1.268.476 2.22t1.427 1.342q.171.073.293.012t.171-.232q.171-.61.195-.756.098-.268-.122-.512-.634-.707-.634-1.83 0-1.854 1.281-3.183t3.354-1.329q1.83 0 2.854 1t1.025 2.61q0 1.342-.366 2.476t-1.049 1.817-1.561.683q-.732 0-1.195-.537t-.293-1.269q.098-.342.256-.878t.268-.915.207-.817.098-.732q0-.61-.317-1t-.927-.39q-.756 0-1.269.695t-.512 1.744q0 .39.061.756t.134.537l.073.171q-1 4.342-1.22 5.098-.195.927-.146 2.171-2.513-1.122-4.062-3.44T.59 10.177q0-3.879 2.744-6.623T9.957.81z" />
                                            </svg>
                                            <span aria-hidden="true">Pin it</span>
                                            <span class="visually-hidden">Pin on Pinterest</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <noscript>
                            <div class="product-item__image no-js-image" style="background-image:url('{{ $pic->getUrl('_540') }}'); background-size: contain; background-position: center center; background-repeat: no-repeat;">
                                <div class="slideup">
                                    <div class="product__sharing">
                                        <!-- /snippets/social-sharing.liquid -->
                                        <div class="sharing" style="text-align: center;">
                                            <a class="share share--facebook" target="_blank" href="//www.facebook.com/sharer.php?u=https://contests.withlovedarling.com/entry/{{ $entry->id }}">
                                                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-facebook" viewBox="0 0 20 20">
                                                    <path fill="#444" d="M18.05.811q.439 0 .744.305t.305.744v16.637q0 .439-.305.744t-.744.305h-4.732v-7.221h2.415l.342-2.854h-2.757v-1.83q0-.659.293-1t1.073-.342h1.488V3.762q-.976-.098-2.171-.098-1.634 0-2.635.964t-1 2.72V9.47H7.951v2.854h2.415v7.221H1.413q-.439 0-.744-.305t-.305-.744V1.859q0-.439.305-.744T1.413.81H18.05z" />
                                                </svg>
                                                <span aria-hidden="true">Share</span>
                                                <span class="visually-hidden">Share on Facebook</span>
                                            </a>
                                            <a class="share share--twitter" target="_blank" href="//twitter.com/share?text=Golden%20Star%20Earrings&amp;url=https://contests.withlovedarling.com/entry/{{ $entry->id }}">
                                                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-twitter" viewBox="0 0 20 20">
                                                    <path fill="#444" d="M19.551 4.208q-.815 1.202-1.956 2.038 0 .082.02.255t.02.255q0 1.589-.469 3.179t-1.426 3.036-2.272 2.567-3.158 1.793-3.963.672q-3.301 0-6.031-1.773.571.041.937.041 2.751 0 4.911-1.671-1.284-.02-2.292-.784T2.456 11.85q.346.082.754.082.55 0 1.039-.163-1.365-.285-2.262-1.365T1.09 7.918v-.041q.774.408 1.773.448-.795-.53-1.263-1.396t-.469-1.864q0-1.019.509-1.997 1.487 1.854 3.596 2.924T9.81 7.184q-.143-.509-.143-.897 0-1.63 1.161-2.781t2.832-1.151q.815 0 1.569.326t1.284.917q1.345-.265 2.506-.958-.428 1.386-1.732 2.18 1.243-.163 2.262-.611z" />
                                                </svg>
                                                <span aria-hidden="true">Tweet</span>
                                                <span class="visually-hidden">Tweet on Twitter</span>
                                            </a>
                                            <a class="share share--pinterest" target="_blank" href="//pinterest.com/pin/create/button/?url=https://contests.withlovedarling.com/entry/{{ $entry->id }}&amp;media=https://contests.withlovedarling.com/{{ $entry->getMedia('entries')[0]->getUrl() }}&amp;description={{ urlencode($entry->name) }}">
                                                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-pinterest" viewBox="0 0 20 20">
                                                    <path fill="#444" d="M9.958.811q1.903 0 3.635.744t2.988 2 2 2.988.744 3.635q0 2.537-1.256 4.696t-3.415 3.415-4.696 1.256q-1.39 0-2.659-.366.707-1.147.951-2.025l.659-2.561q.244.463.903.817t1.39.354q1.464 0 2.622-.842t1.793-2.305.634-3.293q0-2.171-1.671-3.769t-4.257-1.598q-1.586 0-2.903.537T5.298 5.897 4.066 7.775t-.427 2.037q0 1.268.476 2.22t1.427 1.342q.171.073.293.012t.171-.232q.171-.61.195-.756.098-.268-.122-.512-.634-.707-.634-1.83 0-1.854 1.281-3.183t3.354-1.329q1.83 0 2.854 1t1.025 2.61q0 1.342-.366 2.476t-1.049 1.817-1.561.683q-.732 0-1.195-.537t-.293-1.269q.098-.342.256-.878t.268-.915.207-.817.098-.732q0-.61-.317-1t-.927-.39q-.756 0-1.269.695t-.512 1.744q0 .39.061.756t.134.537l.073.171q-1 4.342-1.22 5.098-.195.927-.146 2.171-2.513-1.122-4.062-3.44T.59 10.177q0-3.879 2.744-6.623T9.957.81z" />
                                                </svg>
                                                <span aria-hidden="true">Pin it</span>
                                                <span class="visually-hidden">Pin on Pinterest</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </noscript>
                            @endforeach
                        <div class="product-information aos-init aos-animate" data-aos="fade-up" data-aos-anchor=".product-grid" data-aos-delay="0" data-aos-duration="100">
                            <h3 class="title">{{ $entry->name}}</h3>
                            <span class="price">
                                <small>By</small> {{ $entry->designer}}
                            </span>
                            <button type="button"  class="btn vote-button product__submit__add"><a href="/vote/{{$entry->id}}">Vote ({{ count($entry->voters()->get())}})</a></button>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

        </section>
    </div>

@endsection