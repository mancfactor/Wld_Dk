<h2 class="theme coll-heading">{{ $contest->video_heading}}</h2>
<div id="shopify-section-index-background-video" class="shopify-section featured-video-section">             
  <!-- Video -->
    <style>
    .iframe-container{
        position: relative;
        width: 100%;
        padding-bottom: 56.25%; 
        height: 0;
    }
    .iframe-container iframe{
    position: absolute;
    top:0;
    left: 0;
    width: 100%;
    height: 100%;
    }
    </style>
    <div class="iframe-container" id="youtube-index-container">
        <iframe src="https://www.youtube-nocookie.com/embed/{{ $contest->video_link}}?autoplay=1&showinfo=0&rel=0&color=white"  frameborder="0"></iframe>
    </div>    
    <div id="button-row">
        <p style="text-align:center; padding: 20px;">
            @if(!empty($contest->button1_text))
                <a href="{{$contest->button1_link}}" class="btn btn--large btn--secondary btn--neutral caps">{{$contest->button1_text}}</a>
            @endif
            @if(!empty($contest->button2_text))
                <a href="{{$contest->button2_link}}" class="btn btn--large btn--secondary btn--neutral caps">{{$contest->button2_text}}</a>
            @endif
            @if(!empty($contest->button3_text))
                <a href="{{$contest->button3_link}}" class="btn btn--large btn--secondary btn--neutral caps">{{$contest->button3_text}}</a>
            @endif
            @if(!empty($contest->button4_text))
                <a href="{{$contest->button4_link}}" class="btn btn--large btn--secondary btn--neutral caps">{{$contest->button4_text}}</a>
            @endif
            @if(!empty($contest->button5_text))
                <a href="{{$contest->button5_link}}" class="btn btn--large btn--secondary btn--neutral caps">{{$contest->button5_text}}</a>
            @endif
            @if(!empty($contest->button6_text))
                <a href="{{$contest->button6_link}}" class="btn btn--large btn--secondary btn--neutral caps">{{$contest->button6_text}}</a>
            @endif
        </p>
    </div>   
</div>