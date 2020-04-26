<div class="stepsrow wldpink">
    <div class="stepstextcolumn">
        <div class="spacer picpad" >
            <p class="t-text-sm sm:t-text-base xl:t-text-xl t-m-0 xl:t-mt-6 t-leading-10">{!! $contest->intro_body1 !!}</p>
            <hr class="t-m-auto t-my-5 xl:t-my-10 t-w-1/2 lg:t-w-1/3 t-border t-border-gray-400" />
            <p class="t-text-sm sm:t-text-base xl:t-text-xl t-m-0 t-leading-10">{!! $contest->intro_body2 !!}</p>
            <br />
            <a href="{{ $contest->intro_button1_link }}" class="btn btn--large btn--secondary btn--neutral caps" title="Desgin Contest Featured Entires">{{ $contest->intro_button1_text }}</a>
        </div>
    </div>
    <div class="stepscolumn">
        <img    class="t-object-cover t-object-center"
                srcset="{{ $contest->introMedia1->getSrcSet('responsive')}}" 
                src="{{ $contest->introMedia1->getUrl('_900') }}"
                >
    </div>
</div>