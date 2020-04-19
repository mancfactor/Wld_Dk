
<div id="shopify-section-index-rich-text" class="shopify-section" style="position:relative;">
    <!-- /sections/index-rich-text.liquid -->
    <section class="index-rte rich-text" data-section-id="index-rich-text" data-section-type="rich-text">
        <div class="wrapper" data-aos-duration="500" data-aos="fade-up">
            <div class="grid">
                <div id="howtoenter" class="grid__item medium-up--push-one-twelfth medium-up--four-fifths">
                    <h3>{{ $contest->how_title}}</h3>
                    <div class="row">
                        <div  class="col">
                                <ul>
                                    {!! $contest->how_body !!}
                                </ul>
                            @if(!empty($contest->how_step1_title))
                            <h4>{{ $contest->how_step1_title }}</h4>
                            <ul>
                                {!! $contest->how_step1_body !!}
                            </ul>
                            @endif
                        </div>
                        <div class="col">
                            
                            @if(!empty($contest->how_step2_title))
                                <h4>{{ $contest->how_step2_title }}</h4>
                                <ul>
                                    {!! $contest->how_step2_body !!}
                                </ul>
                            @endif
                            @if(!empty($contest->how_step3_title))
                                <h4>{{ $contest->how_step3_title }}</h4>
                                <ul>
                                    {!! $contest->how_step3_body !!}
                                </ul>
                            @endif
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
</div>

            