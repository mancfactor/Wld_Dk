@extends('layouts.clone.layoutb') 
@section('content')

<div id="shopify-section-1478798179956" class="shopify-section homepage-section">
    <section class="border-top section products-section" data-section-type="featured-collection">
        <div class="container">
            <div class="opposing-items">
                <h1 class="section-heading left">CONTESTS</h1>
                <a class="btn section-count" href="#">
                    <span class="not-tiny">View all (1)</span>
                    <span class="tiny">1</span>
                </a>
            </div>
            <div class="row">
                <div class="col">
                    <div class="header-image ftc"><img src="images/showyourlove4.png" sizes="(max-width: 959px) 100vw, 50vw"></div>
                </div>        
                <div class="col" style="padding: 10px 0px;">
                    <h1 class="page-title nomargin" style="text-align: center;font-size:36px;font-weight:bold;">Design a piece with purpose</h1>
                    <hr class="hrspacer" style="width: 65%;" />
                    <h3 style="text-align: center;">here's how</h3>
                    <br />
                    <p style="text-align:center;font-weight:bold;"><span style="font-size:36px;">1</span>
                        <br /><span style="font-size:28px;">Express yourself.</span></p>
                    <p style="text-align:center;font-size:20px;">Unleash your creativity to draw a timeless piece of jewellery.
                        <br />Upload your design.</p>
                    <br />
                    <p style="text-align:center;font-weight:bold;"><span style="font-size:36px;">2</span>
                        <br /><span style="font-size:28px;">Vote for your favourite.</span></p>
                    <p style="text-align:center;font-size:20px;">This is an open creative experience.
                        <br />Anyone can vote on the submissions.</p>
                    <br />
                    <p style="text-align:center;font-weight:bold;"><span style="font-size:36px;">3</span>
                        <br /><span style="font-size:28px;">A special piece brought to life.</span></p>
                    <p style="text-align:center;font-size:20px;">The winning design will be produced by With Love Darling.
                        <br/>Designers will recieve a portion of the sales and be featured by With Love Darling and Red Nose Day.</p>
                    <hr class="hrspacer">
                    <p style="text-align: center;font-size:36px;font-weight:bold;">Enter by December 31, 2019</p>
                    <p style="text-align: center;color:#ffffff;">
                        <a class="btn btn-primary btn-lg" href="/enter-contest">
                            <span class="not-tiny">Enter Contest</span>
                            <span class="tiny">Enter</span>
                        </a>
                    </p>
                </div>
            </div>
            
            <div id='video' style="text-align:center;justify-content: center;align-content: center;">
                <hr class="hrspacer35notop" />                
                <p style="text-align:center;font-weight:bold;font-size:36px;">From Idea to Creation</p>
                <hr class="hrspacer35" />
                                
                <video id='my-video' class='video-js' controls  poster="images/collab.png" data-setup='{}'>
                    <source src='contest.mp4' type='video/mp4'>
                    <p class='vjs-no-js'>
                        To view this video please enable JavaScript, and consider upgrading to a web browser that
                        <a href='https://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>
                    </p>
                </video>
                <div id="buttons" style="text-align:center;">
                    <p style="text-align: center;color:#ffffff;">
                        <a class="btn btn-primary btn-lg section-count" href="#aRules">
                            <span class="not-tiny">Rules &amp; Eligibility</span>
                            <span class="tiny">Rules</span>
                        </a>
                        <a class="btn btn-primary btn-lg section-count" href="#aPrizes">
                            <span class="not-tiny">Prizes</span>
                            <span class="tiny">Prizes</span>
                        </a>
                        <a class="btn btn-primary btn-lg section-count" href="#aHowToEnter">
                            <span class="not-tiny">How To Enter</span>
                            <span class="tiny">How</span>
                        </a>
                        <a class="btn btn-primary btn-lg section-count" href="#aFaq">
                            <span class="not-tiny">FAQ</span>
                            <span class="tiny">FAQ</span>
                        </a>
                        <a class="btn btn-primary btn-lg section-count" href="/enter-contest">
                            <span class="not-tiny">Enter Contest</span>
                            <span class="tiny">Enter</span>
                        </a>
                        <a class="btn btn-primary btn-lg section-count" href="/featured">
                            <span class="not-tiny">Featured Entries</span>
                            <span class="tiny">Entries</span>
                        </a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p style="text-align:center;font-weight:bold;font-size:28px;padding: 40px 0px 20px 0px;line-height: 1.5em;">Since the beginning of time, jewellery has been an expression of human stories.
                        <br />Love tokens, good luck talisman, and reminders of who we are and what matters.
                        <br />Jewellery helps express who we are.</p>
                    <hr style="border: 1px solid #354863;width: 50%;margin: auto;margin-top: 5%;margin-bottom: 5%;height:0;" />
                    <p style="text-align:center;font-weight:bold;font-size:28px;padding: 20px 0px 20px 0px;line-height: 1.5em;">With Love Darling wants to create a new special piece of jewellery for Comic Relief. Think about the story you want us to tell with your design. How can you inspire others to make a difference? We believe in you, and the art you create.</p>
                </div>
                <div class="col">
                    <div class="header-image ftc"><img src="images/contest2.png" sizes="(max-width: 600px) 100vw, 50vw"></div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="header-image ftc"><img src="images/upload.png" sizes="(max-width: 600px) 100vw, 50vw"></div>
                </div>
                <div class="col" style="padding-top: 16%;">
                    <hr class="hrspacer35notop" style="width:55%;" />                
                    <p style="text-align:center;font-weight:bold;font-size:36px;line-height: 1.5em;">Submit your design,<br />and tell us it's story.</p>
                    <hr class="hrspacer35"  style="width:55%;" />
                    <p style="text-align: center;color:#ffffff;">
                        <a class="btn btn-primary btn-lg section-count" href="/enter-contest">
                            <span class="not-tiny">Upload your design here</span>
                            <span class="tiny">Upload</span>
                        </a>
                    </p>
                </div>
                
            </div>
            <hr class="hrspacer" />
            <div id="aHowToEnter">
                <hr style="border: 1px solid #354863;width: 35%;margin: auto;margin-bottom:36px;height:0;" />                
                <p style="text-align:center;font-weight:bold;font-size:36px;">How To Enter</p>
                <hr style="border: 1px solid #354863;width: 35%;margin: auto;margin-top:20px;margin-bottom:20px;height:0;" />
            </div>
            <div class="row">
                <div  class="col">
                    <h4>GUIDELINES</h4>
                    <ul>
                        <li>Remember: We're looking for a design of a piece of jewellery that you feel represents and symbolizes the values of <b>Global Goal #1</b> and <b>Red Nose Day</b>
                            <br/> You can learn more about the Global Goals <a href="https://www.globalgoals.org" target="_blank">here</a></li>
                        <li>This piece should be a pendant or charm that can be attached to a necklace or bracelet.
                            <br />We reserve the right to change the size.</li>
                    </ul>
                    <h4>STEP 1: CREATE</h4>
                    <ul>
                        <li>Come up with a design. Think about what you can create to help push the message of Comic Relief and The Global Goals. What kind of elegant and striking piece would inspire you to help make a change?</li>
                        <li>Draw your design, whether it be simply on paper, or on a tablet. All that matters is that the design is clear, concise, and able to be sent to us in a PDF or Image format.</li>
                    </ul>
                    
                    
                </div>
                <div class="col">
                    <h4>STEP 2: ELABORATE</h4>
                    <ul>
                        <li>Provide a short paragraph about yourself and your design. Who are you? Why are you entering the challenge? What inspires you about the message behind these movements? What inspired you to create this design? What would you call the piece you've created?</li>
                        <li>You may create and submit multiple designs; however please do not make multiple submissions of the same design with different colours or minor tweaks.</li>
                    </ul>
                    <h4>STEP 3: SHARE</h4>
                    <ul>
                        <li>Be sure to read the Terms and Conditions reagrding the contest.</li>
                        <li>Upload your design and writing onto the With Love Dariling website in the contest section. Be sure to include all information about yourself, where we can contact you, and about your gorgeous design. Remember, the deadline to submit your design is December 31, 2019.</li>
                        <li>Feel free to promote your work on all social media platforms to get other to vote!</li>
                        <li>Wait for our announcement of the finalists on March 1, 2020. The With Love Darling team and all the voters will carefully choose which pieces make it to the next round. Voting closes on February 15, 2020.</li>
                    </ul>
                </div>
            </div>
            <div id="aRules">
                <hr style="border: 1px solid #354863;width: 35%;margin: auto;margin-bottom:36px;height:0;" />                
                <p style="text-align:center;font-weight:bold;font-size:36px;">Rules &amp; Eligibility</p>
                <hr style="border: 1px solid #354863;width: 35%;margin: auto;margin-top:20px;margin-bottom:20px;height:0;" />
            </div>
            <div class="row">
                <p>WITH LOVE DARLING is wanting to create a new special piece of jewelery for COMIC RELIEF.</p>
                <br />
                <p>COMIC RELIEF is an organization with the mission to end child poverity by funding programs that keep children safe, healthy, and educated. Through the power of entertainment, they bring people together to laugh and have fun, all while raising life-changing cash for the children that need it the most. WITH LOVE DARLING wants to help make that goal a reality by helping produce a new piece of jewelery that represents the message of this campaign perfectly.</p>
                <br />
                <p>This is where YOU come in.</p>
                <br />
                <p>We want to challenge you, whether you're a closet creatvie or a budding designer or you just want to be a part of the Comic Relief movement, to design the perfect ORIGINAL charm for the charity, that can be attached to a necklace or bracelet.</p>
                <br />
                <p>The objective for this content is to engage and inspire a wider community around Comic Relief, and the message it brings. We think this piece should connect to United Nations Sustainable Development Goal #1, NO POVERTY, whose values lineup with Comic Relief.</p>
                <br />
                <p>The deadline to submit your design is December 31, 2019. The voters and the With Love Darling team will carefully choose the finalists, taking into account creativity, uniqueness, and how effective it is towards the message of No Poverty and Comic Relief. After we choose a shortlist of finalists, anyone can vote for their favourite design until February 15, 2020. The winning artist will be rewarded with $1,000, a feature on the Comic Relief and With Love Darling websites, and commission for whatever sales are made from the designed piece.</p>
                <br />
                <p>Think about the story you want to tell with your design.<br />How can you inspire people to help make a difference?</p>
                <br />
                <p>We believe in you, and the art you create.</p>
            </div>
            <div id="aPrizes">
                <hr style="border: 1px solid #354863;width: 20%;margin: auto;margin-bottom:36px;height:0;" />                
                <p style="text-align:center;font-weight:bold;font-size:36px;">Prizes</p>
                <hr class="hrspacer" style="width:20%;" />
            </div>
            <div class="row">
                <div class="col">
                    <h4>THE PRIZES, AS VOTED BY THE COMMUNITY</h4> 
                    The best pieces, as voted by the community, will receive the following prizes:
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td style="width:160px;"><b>FIRST PRIZE:</b></td>
                                <td>$1,000 and a feature on the Comic Relief and the With Love Darling websites</td>
                            </tr>
                            <tr>
                                <td style="width:160px;"><b>SECOND PRIZE:</b></td>
                                <td>$500</td>
                            </tr>
                            <tr>
                                <td style="width:160px;"><b>THIRD PRIZE:</b></td>
                                <td>$100</td>
                            </tr>
                        </tbody>
                    </table>
                    <h4>SPECIAL PRIZES</h4>
                    <p>Originality Award: For the design that incorporates the best story and message, chosen by the With Love Darling team. This can be a personal story or the creative inspiration behind the design. The winner of the Originality award will win $500 and a feature on the Comic Relief and the With Love Darling websites</p>
                    <h4>VOTING</h4>
                    <ul>
                        <li>Once the section opens on With Love Darling's website, you're free to vote for whichever design speaks to you the most.</li>
                        <li>You can only vote once per submission per day.</li>
                    </ul>
                    <h4>ELIGIBILITY</h4>
                    <ul>
                        <li>The competition is world-wide, so we encourage any artists and creative souls from across the globe to enter.</li>
                        <li>You must be over 18 years old to enter.</li>
                    </ul>
                    <h4>ONGOING SALES COMMISSIONS & CREDITS:</h4>
                    <p>All designs sold in this collection will earn a commission of 5% of net sales of the products sold, per our Terms & Conditions. The ongoing commission is paid in addition to the upfront cash prizes. Additionally, a credit to you will be placed by the collection on our website.</p>
                </div>
            </div>
            <div id="aFaq">
                <hr style="border: 1px solid #354863;width: 50%;margin: auto;margin-bottom:36px;height:0;" />                
                <p style="text-align:center;font-weight:bold;font-size:36px;">Frequently Asked Questions</p>
                <hr style="border: 1px solid #354863;width: 50%;margin: auto;margin-top:20px;margin-bottom:20px;height:0;" />
            </div>
            <div class="row">
                <div class="col">
                    <h4>I'm not great at drawing. How can I contextualize my idea for my piece?</h4>
                    <ul>
                        <li>Get creative! We need a visual of the piece you're presenting, so feel free to use photoshop, collages or anything else that can tell us exactly what you want your piece to look like.</li>
                        <li>Or get in touch with other contestants to collaborate.</li>
                    </ul>
                    <h4>I'm having trouble submitting my piece and have more questions! Who can I talk to?</h4>
                    <ul>
                        <li>Ask any questions regarding the contest to <a href="mailto:contest@withlovedarling.com">contest@withlovedarling.com</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h4>Can I design the piece with a friend?</h4>
                    <ul>
                        <li>Sure! You can design alone or as a team. If you're the lucky winners, you'll split the prize, the commissions and credits.</li>
                    </ul>
                    <h4>When is the deadline to enter?</h4>
                    <ul>
                        <li>Enter by December 31, 2019.</li>
                    </ul>
                </div>
            </div>
        </div>
        
    </section>
</div>
@endsection