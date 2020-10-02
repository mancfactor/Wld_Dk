<div class="product__wrapper">
    <nav class="breadcrumbs">
        <small>
            <a href="/">Home</a><span class="breadcrumbs__arrow">
                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-arrow-right" viewBox="0 0 20 38">
                        <path d="M15.932 18.649L.466 2.543A1.35 1.35 0 0 1 0 1.505c0-.41.155-.77.466-1.081A1.412 1.412 0 0 1 1.504 0c.41 0 .756.141 1.038.424l16.992 17.165c.31.283.466.636.466 1.06 0 .423-.155.777-.466 1.06L2.542 36.872a1.412 1.412 0 0 1-1.038.424c-.41 0-.755-.141-1.038-.424A1.373 1.373 0 0 1 0 35.813c0-.423.155-.776.466-1.059L15.932 18.65z" fill="#726D75" fill-rule="evenodd"/>
                </svg>
            </span>
            <a href="//contests.withlovedarling.com" title="">CONTESTS</a>
        </small>
    </nav>
</div>
<h2 class="theme coll-heading t-text-base sm:t-text-xl md:t-text-2xl lg:t-text-4xl xl:t-text-5xl">{{ $contest->contest_heading}}</h2>
<div class="stepsrow wldpink">
    <div class="stepscolumn">
        <img    class="t-object-cover t-object-center"
                srcset="{{ $contest->stepsMedia->getSrcSet('responsive')}}" 
                src="{{ $contest->stepsMedia->getUrl('_900') }}">
    </div>
    <div class="stepstextcolumn xl:t-my-16">
        <p class="t-font-bold t-my-3 t-text-xl md:t-text-2xl lg:t-text-3xl xl:t-text-4xl">{{ $contest->slogan}}</p>
        <p></p>
        <hr class="t-m-auto t-my-2 t-w-4/5 lg:t-w-3/5 t-border t-border-gray-400" />
        <p class="t-text-lg md:t-text-2xl">Here's how</p>
        <p class="t-font-bold t-text-4xl lg:t-text-6xl t-m-0 xl:t-mt-6">1</p>
        <p class="t-font-bold t-text-2xl sm:t-text-4xl t-m-0">{{ $contest->step1_title}}</p>
        <p class="t-text-base sm:t-text-lg t-m-0">{!! $contest->step1_body !!}</p>
        <br />
        <p class="t-font-bold t-text-4xl lg:t-text-6xl t-m-0 xl:t-mt-6">2</p>
        <p class="t-font-bold t-text-2xl sm:t-text-4xl t-m-0">{{ $contest->step2_title}}</p>
        <p class="t-text-base sm:t-text-lg t-m-0">{!! $contest->step2_body !!}</p>
        <br />
        <p class="t-font-bold t-text-4xl lg:t-text-6xl t-m-0 xl:t-mt-6">3</p>
        <p class="t-font-bold t-text-2xl sm:t-text-4xl t-m-0">{{ $contest->step3_title}}</p>
        <p class="t-text-base sm:t-text-lg t-m-0">{!! $contest->step3_body !!}</p>
        <br />
        <hr class="t-m-auto t-my-2 t-w-4/5 lg:t-w-3/5 t-border t-border-gray-400" />
        <p class="t-font-bold t-text-2xl sm:t-text-4xl">Enter by {{ $contest->getSubmitDateText() }}</p>
        <p class="t-text-base sm:t-text-lg">
            <a class="btn btn--large btn--secondary btn--neutral caps" href="/enter-contest">
                Enter Contest
            </a>
        </p>
    </div>
</div>