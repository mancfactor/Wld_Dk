<div class="stepsrow wldpink">
        <div class="stepscolumn t-h-3/4"">
            <img class="t-object-cover t-object-center"    
                srcset="{{ $contest->introMedia2->getSrcSet('responsive')}}" 
                    src="{{ $contest->introMedia2->getUrl('_900') }}" >
        </div>
        <div class="stepstextcolumn" >
            <!--<div class="spacer" style="padding:33% 0;"></div>-->
            <div class="t-py-6 xl:t-py-56" >
                <hr class="t-m-auto t-my-3 t-w-2/3 lg:t-w-3/4 t-border t-border-gray-400" />
                <p class="t-mt-20 t-mb-20 t-font-bold t-text-base sm:t-text-xl md:t-text-2xl lg:t-text-4xl xl:t-text-5xl">{!! $contest->intro_body3 !!}</p>
                <hr class="t-m-auto t-my-3 t-w-2/3 lg:t-w-3/4 t-border t-border-gray-400" />
                <p><br /></p>
                <p>
                    <a class="btn btn--large btn--secondary btn--neutral caps" href="{{ $contest->intro_button2_text }}">
                        <span class="tiny">{{ $contest->intro_button2_text }}</span>
                    </a>
                </p>
            </div>
        </div>
    </div>