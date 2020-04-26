<!--/*
$table->string('contest_heading', 100);
            $table->string('menu_title', 50);
   
            $table->integer('steps_media_id')->unsigned()->nullable();
            $table->string('step1_title',50)->default("");
            $table->string('step1_body',250)->default("");
            $table->string('step2_title',50)->default("");
            $table->string('step2_body',250)->default("");
            $table->string('step3_title',50)->default("");
            $table->string('step3_body',250)->default("");
            $table->string('video_heading',100)->default("");
            $table->string('video_link',200)->default("");
            */
-->
<div class="form-group">
    {!! Form::label('contest_heading', 'Contest Heading: (100 chars max)') !!} 
    {!! Form::text('contest_heading', null, ['class' => 'form-control', 'placeholder' => 'Title for the Contests Section','maxlength' => 100 ]) !!}
</div> 
<div class="form-group">
    {!! Form::label('name', 'Name:  (100 chars max)') !!} 
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Title for the Contests Section','maxlength' => 100 ]) !!}
</div> 
<div class="form-group">
    {!! Form::label('slogan', 'Slogan:  (50 chars max)') !!} 
    {!! Form::text('slogan', null, ['class'=>'form-control', 'placeholder' => 'Contest slogan','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('menu_title', 'Nav Menu Title:  (50 chars)') !!} 
    {!! Form::text('menu_title', null, ['class'=>'form-control', 'placeholder' => 'Title in the nav menu','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('active', 'Active:') !!} 
    {!! Form::radio('active', 1, true, ['class'=>'']) !!} Yes
    {!! Form::radio('active', 0, false, ['class'=>'']) !!} No
</div>
<div class="form-group">
    {!! Form::label('start_date', 'Start Date:') !!} 
    {!! Form::input('date','start_date', $startDateDefault, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('submit_date', 'Submit Date:') !!} 
    {!! Form::input('date','submit_date', $submitDateDefault, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('vote_date', 'Vote Date:') !!} 
    {!! Form::input('date','vote_date', $voteDateDefault, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('end_date', 'End Date:') !!} 
    {!! Form::input('date','end_date', $endDateDefault, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('hashtag', 'Hashtag: (30 chars max') !!} 
    {!! Form::text('hashtag', null, ['class'=>'form-control', 'placeholder' => 'Hashtag for social shares','maxlength' => 30 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('step1_title', 'Step 1 Title:  (50 chars max)') !!} 
    {!! Form::text('step1_title', null, ['class'=>'form-control', 'placeholder' => 'Step 1 Title','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('step1_body', 'Step 1 Body:  (250 chars max)') !!} <a href="#" onclick="$('#cheatsheet').modal('show');">Markup Cheatsheet</a>
    {!! Form::textarea('step1_body', null, ['class'=>'form-control','placeholder' => 'Step 1 Body', 'maxlength'=>250, 'rows' => 2]) !!}
</div> 
<div class="form-group">
    {!! Form::label('step2_title', 'Step 2 Title:  (50 chars max)') !!} 
    {!! Form::text('step2_title', null, ['class'=>'form-control', 'placeholder' => 'Step 2 Title','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('step2_body', 'Step 2 Body:  (250 chars max)') !!} <a href="#" onclick="$('#cheatsheet').modal('show');">Markup Cheatsheet</a> 
    {!! Form::textarea('step2_body', null, ['class'=>'form-control','placeholder' => 'Step 2 Body', 'maxlength'=>250, 'rows' => 2]) !!}
</div> 
<div class="form-group">
    {!! Form::label('step3_title', 'Step 3 Title:  (50 chars max)') !!} 
    {!! Form::text('step3_title', null, ['class'=>'form-control', 'placeholder' => 'Step 3 Title','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('step3_body', 'Step 3 Body:  (250 chars max)') !!} <a href="#" onclick="$('#cheatsheet').modal('show');">Markup Cheatsheet</a>
    {!! Form::textarea('step3_body', null, ['class'=>'form-control','placeholder' => 'Step 3 Body', 'maxlength'=>250, 'rows' => 2]) !!}
</div>
<div class="form-group">
    {!! Form::label('steps_media_id', 'Steps Image:') !!} 
    {!! Form::select('steps_media_id', $mediaOptions, $contest->steps_media_id, ['class'=>'form-control', 'id'=>'steps_media_id']) !!}
</div> 
<div class="form-group">
    {!! Form::label('video_heading', 'Video Heading: (100 chars max)') !!} 
    {!! Form::text('video_heading', null, ['class' => 'form-control', 'placeholder' => 'Title for the Video Section','maxlength' => 100 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('video_link', 'Youtube link: https://youtu.be/XXXXXXX (50 chars max)') !!} 
    {!! Form::text('video_link', null, ['class' => 'form-control', 'placeholder' => 'Link to Video','maxlength' => 50 ]) !!}
</div> 
<div class="form-group">
    {!! Form::label('button1_text', 'Button 1 Text:  (50 chars max, leave blank to not display)') !!} 
    {!! Form::text('button1_text', null, ['class'=>'form-control', 'placeholder' => 'button 1 text','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('button1_link', 'Button 1 link:  (50 chars max, no https:// required)') !!} 
    {!! Form::text('button1_link', null, ['class'=>'form-control', 'placeholder' => 'button 1 link','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('button2_text', 'Button 2 Text:  (50 chars max, leave blank to not display)') !!} 
    {!! Form::text('button2_text', null, ['class'=>'form-control', 'placeholder' => 'button 2 text','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('button2_link', 'Button 2 link:  (50 chars max, no https:// required)') !!} 
    {!! Form::text('button2_link', null, ['class'=>'form-control', 'placeholder' => 'button 2 link','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('button3_text', 'Button 3 Text:  (50 chars max, leave blank to not display)') !!} 
    {!! Form::text('button3_text', null, ['class'=>'form-control', 'placeholder' => 'button 3 text','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('button3_link', 'Button 3 link:  (50 chars max, no https:// required)') !!} 
    {!! Form::text('button3_link', null, ['class'=>'form-control', 'placeholder' => 'button 3 link','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('button4_text', 'Button 4 Text:  (50 chars max, leave blank to not display)') !!} 
    {!! Form::text('button4_text', null, ['class'=>'form-control', 'placeholder' => 'button 4 text','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('button4_link', 'Button 4 link:  (50 chars max, no https:// required)') !!} 
    {!! Form::text('button4_link', null, ['class'=>'form-control', 'placeholder' => 'button 4 link','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('button5_text', 'Button 5 Text:  (50 chars max, leave blank to not display)') !!} 
    {!! Form::text('button5_text', null, ['class'=>'form-control', 'placeholder' => 'button 5 text','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('button5_link', 'Button 5 link:  (50 chars max, no https:// required)') !!} 
    {!! Form::text('button5_link', null, ['class'=>'form-control', 'placeholder' => 'button 5 link','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('button6_text', 'Button 6 Text:  (50 chars max, leave blank to not display)') !!} 
    {!! Form::text('button6_text', null, ['class'=>'form-control', 'placeholder' => 'button 6 text','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('button6_link', 'Button 6 link:  (50 chars max, no https:// required)') !!} 
    {!! Form::text('button6_link', null, ['class'=>'form-control', 'placeholder' => 'button 6 link','maxlength' => 50 ]) !!}
</div>

<div class="form-group">
    {!! Form::label('intro_body1', 'Intro Body 1:  (250 chars max)') !!} <a href="#" onclick="$('#cheatsheet').modal('show');">Markup Cheatsheet</a>
    {!! Form::textarea('intro_body1', null, ['class'=>'form-control','placeholder' => 'Intro Body 1', 'maxlength'=>250, 'rows' => 3]) !!}
</div>
<div class="form-group">
    {!! Form::label('intro_body2', 'Intro Body 2:  (250 chars max)') !!} <a href="#" onclick="$('#cheatsheet').modal('show');">Markup Cheatsheet</a>
    {!! Form::textarea('intro_body2', null, ['class'=>'form-control','placeholder' => 'Intro Body 2', 'maxlength'=>250, 'rows' => 3]) !!}
</div>

<div class="form-group">
    {!! Form::label('intro_button1_text', 'Intro Button 1 Text:  (50 chars max, leave blank to not display)') !!} 
    {!! Form::text('intro_button1_text', null, ['class'=>'form-control', 'placeholder' => 'intro button 1 text','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('intro_button1_link', 'Intro Button 1 link:  (50 chars max, no https:// required)') !!} 
    {!! Form::text('intro_button1_link', null, ['class'=>'form-control', 'placeholder' => 'intro button 1 link','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('intro_media1_id', 'Intro Image 1 (top right):') !!} 
    {!! Form::select('intro_media1_id', $mediaOptions, $contest->intro_media1_id, ['class'=>'form-control', 'id'=>'intro_media1_id']) !!}
</div> 
<div class="form-group">
    {!! Form::label('intro_media2_id', 'Intro Image 2 (bottom left):') !!} 
    {!! Form::select('intro_media2_id', $mediaOptions, $contest->intro_media2_id, ['class'=>'form-control', 'id'=>'intro_media2_id']) !!}
</div> 
<div class="form-group">
    {!! Form::label('intro_body3', 'Intro Body 3:  (250 chars max)') !!} <a href="#" onclick="$('#cheatsheet').modal('show');">Markup Cheatsheet</a>
    {!! Form::textarea('intro_body3', null, ['class'=>'form-control','placeholder' => 'Intro Body 3', 'maxlength'=>250, 'rows' => 3]) !!}
</div>
<div class="form-group">
    {!! Form::label('intro_button2_text', 'Intro Button 2 Text:  (50 chars max, leave blank to not display)') !!} 
    {!! Form::text('intro_button2_text', null, ['class'=>'form-control', 'placeholder' => 'intro button 2 text','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('intro_button2_link', 'Intro Button 2 link:  (50 chars max, no https:// required)') !!} 
    {!! Form::text('intro_button2_link', null, ['class'=>'form-control', 'placeholder' => 'intro button 2 link','maxlength' => 50 ]) !!}
</div>

<div class="form-group">
    {!! Form::label('how_title', 'How To Enter Title:  (50 chars)') !!} <a href="#" onclick="$('#cheatsheet').modal('show');">Markup Cheatsheet</a>
    {!! Form::text('how_title', null, ['class'=>'form-control', 'placeholder' => 'How To Enter Title','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('how_body', 'How To Enter Intro Body:  (800 chars max)') !!} <a href="#" onclick="$('#cheatsheet').modal('show');">Markup Cheatsheet</a>
    {!! Form::textarea('how_body', null, ['class'=>'form-control', 'maxlength'=>800, 'rows' => 6]) !!}
</div>
<div class="form-group">
    {!! Form::label('how_step1_title', 'How To Enter Step 1 Title:  (50 chars max)') !!} 
    {!! Form::text('how_step1_title', null, ['class'=>'form-control', 'placeholder' => 'How To Enter Step 1 Title','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('how_step1_body', 'How To Enter Step 1 Body:  (800 chars max)') !!} <a href="#" onclick="$('#cheatsheet').modal('show');">Markup Cheatsheet</a>
    {!! Form::textarea('how_step1_body', null, ['class'=>'form-control', 'placeholder' => 'How To Enter Step 1 Body','maxlength'=>800, 'rows' => 6]) !!}
</div> 
<div class="form-group">
    {!! Form::label('how_step2_title', 'How To Enter Step 2 Title:  (50 chars max)') !!} 
    {!! Form::text('how_step2_title', null, ['class'=>'form-control', 'placeholder' => 'How To Enter Step 2 Title','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('how_step2_body', 'How To Enter Step 2 Body:  (800 chars max)') !!} <a href="#" onclick="$('#cheatsheet').modal('show');">Markup Cheatsheet</a>
    {!! Form::textarea('how_step2_body', null, ['class'=>'form-control', 'placeholder' => 'How To Enter Step 2 Body', 'maxlength'=>800, 'rows' => 6]) !!}
</div> 
<div class="form-group">
    {!! Form::label('how_step3_title', 'How To Enter Step 3 Title:  (50 chars max)') !!} 
    {!! Form::text('how_step3_title', null, ['class'=>'form-control', 'placeholder' => 'How To Enter Step 3 Title','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('how_step3_body', 'How To Enter Step 3 Body:  (800 chars max)') !!} <a href="#" onclick="$('#cheatsheet').modal('show');">Markup Cheatsheet</a>
    {!! Form::textarea('how_step3_body', null, ['class'=>'form-control', 'placeholder' => 'How To Enter Step 3 Body', 'maxlength'=>800, 'rows' => 6]) !!}
</div>
<div class="form-group">
    {!! Form::label('rules_title', 'Rules Title:  (50 chars max)') !!} 
    {!! Form::text('rules_title', null, ['class'=>'form-control', 'placeholder' => 'Rules Title','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('rules_body', 'Rules Body:  (800 chars max)') !!} <a href="#" onclick="$('#cheatsheet').modal('show');">Markup Cheatsheet</a>
    {!! Form::textarea('rules_body', null, ['class'=>'form-control', 'placeholder' => 'Rules Body', 'rows' => 10]) !!}
</div>
<div class="form-group">
    {!! Form::label('prize_heading', 'Prizes Heading:  (50 chars max)') !!} 
    {!! Form::text('prize_heading', null, ['class'=>'form-control', 'placeholder' => 'Prizes Title','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('prize_title', 'Prizes Title:  (100 chars max)') !!} 
    {!! Form::text('prize_title', null, ['class'=>'form-control', 'placeholder' => 'Prizes Title','maxlength' => 100 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('prize_body', 'Prizes Body:  (100 chars max)') !!} 
    {!! Form::text('prize_body', null, ['class'=>'form-control', 'placeholder' => 'Prize Body','maxlength' => 100 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('prize_first_title', '1st Prize Title:  (50 chars max)') !!} 
    {!! Form::text('prize_first_title', null, ['class'=>'form-control', 'placeholder' => '1st Prize Title','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('prize_first_body', '1st Prize Body:  (100 chars max)') !!}  <a href="#" onclick="$('#cheatsheet').modal('show');">Markup Cheatsheet</a>
    {!! Form::text('prize_first_body', null, ['class'=>'form-control', 'placeholder' => '1st Prize Body','maxlength' => 100 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('prize_second_title', '2nd Prize Title:  (50 chars max)') !!} 
    {!! Form::text('prize_second_title', null, ['class'=>'form-control', 'placeholder' => '2nd Prize Title','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('prize_second_body', '2nd Prize Body:  (100 chars max)') !!}  <a href="#" onclick="$('#cheatsheet').modal('show');">Markup Cheatsheet</a>
    {!! Form::text('prize_second_body', null, ['class'=>'form-control', 'placeholder' => '2nd Prize Body','maxlength' => 100 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('prize_third_title', '3rd Prize Title:  (50 chars max)') !!} 
    {!! Form::text('prize_third_title', null, ['class'=>'form-control', 'placeholder' => '3rd Prize Title','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('prize_third_body', '3rd Prize Body:  (100 chars max)') !!}  <a href="#" onclick="$('#cheatsheet').modal('show');">Markup Cheatsheet</a>
    {!! Form::text('prize_third_body', null, ['class'=>'form-control', 'placeholder' => '3rd Prize Body','maxlength' => 100 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('prize_special_title', 'Special Prize Title:  (50 chars max)') !!} 
    {!! Form::text('prize_special_title', null, ['class'=>'form-control', 'placeholder' => 'Special Prize Title','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('prize_special_body', 'Special Prize Body:  (350 chars max)') !!}  <a href="#" onclick="$('#cheatsheet').modal('show');">Markup Cheatsheet</a>
    {!! Form::textarea('prize_special_body', null, ['class'=>'form-control', 'placeholder' => 'Special Prize Body','maxlength' => 350 , 'rows' => 3]) !!}
</div>
<div class="form-group">
    {!! Form::label('prize_voting_title', 'Voting Prize Title:  (50 chars max)') !!} 
    {!! Form::text('prize_voting_title', null, ['class'=>'form-control', 'placeholder' => 'Voting Prize Title','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('prize_voting_body', 'Voting Prize Body:  (350 chars max)') !!}  <a href="#" onclick="$('#cheatsheet').modal('show');">Markup Cheatsheet</a>
    {!! Form::textarea('prize_voting_body', null, ['class'=>'form-control', 'placeholder' => 'Voting Prize Body','maxlength' => 350 , 'rows' => 3]) !!}
</div>
<div class="form-group">
    {!! Form::label('prize_elgible_title', 'Elgible Prize Title:  (50 chars max)') !!} 
    {!! Form::text('prize_elgible_title', null, ['class'=>'form-control', 'placeholder' => 'Elgible Prize Title','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('prize_elgible_body', 'Elgible Prize Body:  (350 chars max)') !!}  <a href="#" onclick="$('#cheatsheet').modal('show');">Markup Cheatsheet</a>
    {!! Form::textarea('prize_elgible_body', null, ['class'=>'form-control', 'placeholder' => 'Elgible Prize Body','maxlength' => 350 , 'rows' => 3]) !!}
</div>
<div class="form-group">
    {!! Form::label('prize_commission_title', 'Prize Commission Title:  (50 chars max)') !!} 
    {!! Form::text('prize_commission_title', null, ['class'=>'form-control', 'placeholder' => 'Prize Commission Title','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('prize_commission_body', 'Prize Commission Body:  (350 chars max)') !!}  <a href="#" onclick="$('#cheatsheet').modal('show');">Markup Cheatsheet</a>
    {!! Form::textarea('prize_commission_body', null, ['class'=>'form-control', 'placeholder' => 'Prize Commission Body','maxlength' => 350 , 'rows' => 3]) !!}
</div>
<div class="form-group">
    {!! Form::label('faq_heading', 'FAQ Heading:  (50 chars max)') !!} 
    {!! Form::text('faq_heading', null, ['class'=>'form-control', 'placeholder' => 'FAQ Heading','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('faq_qa1_title', 'FAQ Q1 Title:  (100 chars max)') !!} 
    {!! Form::text('faq_qa1_title', null, ['class'=>'form-control', 'placeholder' => 'FAQ Q1 Title','maxlength' => 100 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('faq_qa1_body', 'FAQ Q1 Answer:  (300 chars max)') !!}  <a href="#" onclick="$('#cheatsheet').modal('show');">Markup Cheatsheet</a>
    {!! Form::textarea('faq_qa1_body', null, ['class'=>'form-control', 'placeholder' => 'FAQ Q1 Answery', 'maxlength'=>300, 'rows' => 3]) !!}
</div>
<div class="form-group">
    {!! Form::label('faq_qa2_title', 'FAQ Q2 Title:  (100 chars max)') !!} 
    {!! Form::text('faq_qa2_title', null, ['class'=>'form-control', 'placeholder' => 'FAQ Q2 Title','maxlength' => 100 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('faq_qa2_body', 'FAQ Q2 Answer:  (300 chars max)') !!}  <a href="#" onclick="$('#cheatsheet').modal('show');">Markup Cheatsheet</a>
    {!! Form::textarea('faq_qa2_body', null, ['class'=>'form-control', 'placeholder' => 'FAQ Q2 Answery', 'maxlength'=>300, 'rows' => 3]) !!}
</div>
<div class="form-group">
    {!! Form::label('faq_qa3_title', 'FAQ Q3 Title:  (100 chars max)') !!} 
    {!! Form::text('faq_qa3_title', null, ['class'=>'form-control', 'placeholder' => 'FAQ Q3 Title','maxlength' => 100 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('faq_qa3_body', 'FAQ Q3 Answer:  (300 chars max)') !!}  <a href="#" onclick="$('#cheatsheet').modal('show');">Markup Cheatsheet</a>
    {!! Form::textarea('faq_qa3_body', null, ['class'=>'form-control', 'placeholder' => 'FAQ Q3 Answery', 'maxlength'=>300, 'rows' => 3]) !!}
</div>
<div class="form-group">
    {!! Form::label('faq_qa4_title', 'FAQ Q4 Title:  (100 chars max)') !!} 
    {!! Form::text('faq_qa4_title', null, ['class'=>'form-control', 'placeholder' => 'FAQ Q4 Title','maxlength' => 100 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('faq_qa4_body', 'FAQ Q4 Answer:  (300 chars max)') !!}  <a href="#" onclick="$('#cheatsheet').modal('show');">Markup Cheatsheet</a>
    {!! Form::textarea('faq_qa4_body', null, ['class'=>'form-control', 'placeholder' => 'FAQ Q4 Answery', 'maxlength'=>300, 'rows' => 3]) !!}
</div>
<div class="form-group">
    {!! Form::label('faq_qa5_title', 'FAQ Q5 Title:  (100 chars max)') !!} 
    {!! Form::text('faq_qa5_title', null, ['class'=>'form-control', 'placeholder' => 'FAQ Q5 Title','maxlength' => 100 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('faq_qa5_body', 'FAQ Q5 Answer:  (300 chars max)') !!}  <a href="#" onclick="$('#cheatsheet').modal('show');">Markup Cheatsheet</a>
    {!! Form::textarea('faq_qa5_body', null, ['class'=>'form-control', 'placeholder' => 'FAQ Q5 Answery', 'maxlength'=>300, 'rows' => 3]) !!}
</div>

<div class="form-group">
    {!! Form::label('tags', 'Tags:') !!} 
    {!! Form::select('tags[]', $tagsOptions, $tagsDefault, ['class'=>'form-control', 'multiple', 'id'=>'tags']) !!}
</div>
            
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!} 
</div>

<!-- Modal -->
<div class="modal fade" id="cheatsheet" tabindex="-1" role="dialog" aria-labelledby="cheatsheetLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="acheatsheet">Markup Cheatsheet</h5>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    Use <b>&lt;br&gt;</b> to start a new line <br /><br />
                    Use <b>&lt;li&gt;</b><b>&lt;/li&gt;</b> for bulleted line<br /> 
                    ie. <b>&lt;li&gt;</b><i>example bulleted line</i><b>&lt;/li&gt;</b> becomes: <ul style="list-style-type: disc;margin-left:20px;"><li>example bulleted line</li></ul><br />
                    Use <b>&lt;b&gt;</b><b>&lt;/b&gt;</b> for bold<br />
                    ie. <b>&lt;b&gt;</b><i>example text</i><b>&lt;/b&gt;</b> becomes: <b>example text</b> <br /><br />
                    Use <b>&lt;a href="</b><i>Url</i><b>" target="_blank"&gt;</b><i>Link Text</i><b>&lt;/a&gt;</b> for links to other websites <br />
                    i.e. <b>&lt;a href="</b>https://google.com<b>" target="_blank"&gt;</b>Google<b>&lt;/a&gt;</b> becomes: <a href="https://google.com" target="_blank">Google</a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@section('footer')
    <script>
        $('#tags').select2({
            placeholder: 'Choose a tag',
            /*
            // add a new tag on the fly
            tags: true,
            data[]
            ajax: {
                dataType: 'json',
                url: 'api/tags',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term
                    },
                    processResults: function(data) {
                        return { results:data }
                    }    
                },
            }*/
        });
    </script> 
    
@endsection