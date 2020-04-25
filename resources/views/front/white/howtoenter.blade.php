<section class="index-rte rich-text" data-section-id="index-rich-text" data-section-type="rich-text">
    <div class="wrapper" data-aos-duration="500" data-aos="fade-up">
        <div id="howtoenter" class="grid">
            <h3 class="t-text-2xl md:t-text-3xl lg:t-text-4xl xl:t-text-5xl">{{ $contest->how_title}}</h3>
            <div class="row">
                <div  class="col">
                        <ul>
                            {!! $contest->how_body !!}
                        </ul>
                    @if(!empty($contest->how_step1_title))
                    <h4 class="t-text-xl md:t-text-2xl lg:t-text-3xl">{{ $contest->how_step1_title }}</h4>
                    <ul>
                        {!! $contest->how_step1_body !!}
                    </ul>
                    @endif
                </div>
                <div class="col">
                    
                    @if(!empty($contest->how_step2_title))
                        <h4 class="t-text-xl md:t-text-2xl lg:t-text-3xl">{{ $contest->how_step2_title }}</h4>
                        <ul>
                            {!! $contest->how_step2_body !!}
                        </ul>
                    @endif
                    @if(!empty($contest->how_step3_title))
                        <h4 class="t-text-xl md:t-text-2xl lg:t-text-3xl">{{ $contest->how_step3_title }}</h4>
                        <ul>
                            {!! $contest->how_step3_body !!}
                        </ul>
                    @endif
                </div>
            </div>                    
        </div>
    </div>
</section>