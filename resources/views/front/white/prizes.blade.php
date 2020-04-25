
<div id="shopify-section-index-rich-text" class="shopify-section" style="position:relative;">
    <section class="index-rte rich-text" data-section-id="index-rich-text" data-section-type="rich-text">
        <div class="wrapper" data-aos-duration="500" data-aos="fade-up">
            <div class="grid">
                <div id="prizes" class="grid__item medium-up--push-one-twelfth medium-up--four-fifths">
                    <h3 class="t-text-2xl md:t-text-3xl lg:t-text-4xl xl:t-text-5xl">{{ $contest->prize_heading }}</h3>
                    <div class="row">
                        <h4 class="t-text-xl md:t-text-2xl lg:t-text-3xl">{{ $contest->prize_title }}</h4>
                        @if(!empty($contest->prize_body)) 
                        <p>{!! $contest->prize_body !!}</p>
                        @endif
                        <table class="t-table-auto table-borderless">
                            <tbody>
                                <tr>
                                    <td class="t-font-bold">{{ $contest->prize_first_title }}</td>
                                    <td>{!! $contest->prize_first_body !!}</td>
                                </tr>
                                @if(!empty($contest->prize_second_title))
                                <tr>
                                    <td class="t-font-bold">{{ $contest->prize_second_title }}</td>
                                    <td>{!! $contest->prize_second_body !!}</td>
                                </tr>
                                @endif
                                @if(!empty($contest->prize_third_title))
                                <tr>
                                    <td  class="t-font-bold">{{ $contest->prize_third_title }}</td>
                                    <td>{!! $contest->prize_third_body !!}</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        <h4 class="t-text-xl md:t-text-2xl lg:t-text-3xl">{{ $contest->prize_special_title }}</h4>
                        <p>{!! $contest->prize_special_body !!}</p>
                        <h4 class="t-text-xl md:t-text-2xl lg:t-text-3xl">{{ $contest->prize_voting_title }}</h4>
                        <p>{!! $contest->prize_voting_body !!}</p>
                        <h4 class="t-text-xl md:t-text-2xl lg:t-text-3xl">{{ $contest->prize_elgible_title }}</h4>
                        <p>{!! $contest->prize_elgible_body !!}</p>
                        <h4 class="t-text-xl md:t-text-2xl lg:t-text-3xl">{{ $contest->prize_commission_title }}</h4>
                        <p>{!! $contest->prize_commission_body !!}</p>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
</div>