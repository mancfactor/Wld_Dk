
<div id="shopify-section-index-rich-text" class="shopify-section" style="position:relative;">
    <!-- /sections/index-rich-text.liquid -->
    <section class="index-rte rich-text" data-section-id="index-rich-text" data-section-type="rich-text">
        <div class="wrapper" data-aos-duration="500" data-aos="fade-up">
            <div class="grid">
                <div id="prizes" class="grid__item medium-up--push-one-twelfth medium-up--four-fifths">
                    <h3>{{ $contest->prize_heading }}</h3>
                    <div class="row">
                        <h4>{{ $contest->prize_title }}</h4>
                        @if(!empty($contest->prize_body)) 
                        <p>{!! $contest->prize_body !!}</p>
                        @endif
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td style="width:160px;"><b>{{ $contest->prize_first_title }}</b></td>
                                    <td>{!! $contest->prize_first_body !!}</td>
                                </tr>
                                @if(!empty($contest->prize_second_title))
                                <tr>
                                    <td style="width:160px;"><b>{{ $contest->prize_second_title }}</b></td>
                                    <td>{!! $contest->prize_second_body !!}</td>
                                </tr>
                                @endif
                                @if(!empty($contest->prize_third_title))
                                <tr>
                                    <td style="width:160px;"><b>{{ $contest->prize_third_title }}</b></td>
                                    <td>{!! $contest->prize_third_body !!}</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        <h4>{{ $contest->prize_special_title }}</h4>
                        <p>{!! $contest->prize_special_body !!}</p>
                        <h4>{{ $contest->prize_voting_title }}</h4>
                        <p>{!! $contest->prize_voting_body !!}</p>
                        <h4>{{ $contest->prize_elgible_title }}</h4>
                        <p>{!! $contest->prize_elgible_body !!}</p>
                        <h4>{{ $contest->prize_commission_title }}</h4>
                        <p>{!! $contest->prize_commission_body !!}</p>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
</div>

            