
<div id="shopify-section-index-rich-text" class="shopify-section" style="position:relative;">
    <!-- /sections/index-rich-text.liquid -->
    <section class="index-rte rich-text" data-section-id="index-rich-text" data-section-type="rich-text">
        <div class="wrapper" data-aos-duration="500" data-aos="fade-up">
            <div class="grid">
                <div id="faq" class="grid__item medium-up--push-one-twelfth medium-up--four-fifths">
                    <h3 class="t-text-2xl md:t-text-3xl lg:t-text-4xl xl:t-text-5xl">{{ $contest->faq_heading }}</h3>
                    <div class="row">
                        <p class="t-font-bold t-text-base md:t-text-lg lg:t-text-xl">{{ $contest->faq_qa1_title }}
                            <ul>
                                {!! $contest->faq_qa1_body !!}
                            </ul>
                        </p>
                        @if(!empty($contest->faq_qa2_title))
                        <p class="t-font-bold t-text-base md:t-text-lg lg:t-text-xl">{{ $contest->faq_qa2_title }}
                            <ul>
                                {!! $contest->faq_qa2_body !!}
                            </ul>                        
                        </p>
                        @endif
                        @if(!empty($contest->faq_qa3_title))
                        <p class="t-font-bold t-text-base md:t-text-lg lg:t-text-xl">{{ $contest->faq_qa3_title }}
                            <ul>
                                {!! $contest->faq_qa3_body !!}
                            </ul>
                        </p>
                        @endif
                        @if(!empty($contest->faq_qa4_title))
                        <p class="t-font-bold t-text-base md:t-text-lg lg:t-text-xl">{{ $contest->faq_qa4_title }}
                            <ul>
                                {!! $contest->faq_qa4_body !!}
                            </ul>
                        </p>
                        @endif
                        @if(!empty($contest->faq_qa5_title))
                        <p class="t-font-bold t-text-base md:t-text-lg lg:t-text-xl">{{ $contest->faq_qa5_title }}
                            <ul>
                                {!! $contest->faq_qa5_body !!}
                            </ul>
                        </p>
                        @endif
                    </div>                    
                </div>
            </div>
        </div>
    </section>
</div>