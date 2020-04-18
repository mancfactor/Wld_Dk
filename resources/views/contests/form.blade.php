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
    {!! Form::label('description', 'Description:') !!} 
    {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
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
    {!! Form::label('how_it_work', 'How It Works:') !!} 
    {!! Form::textarea('how_it_work', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('rule', 'Rules:') !!} 
    {!! Form::textarea('rule', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('prize', 'Prizes:') !!} 
    {!! Form::textarea('prize', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('step1_title', 'Step 1 Title:  (50 chars max)') !!} 
    {!! Form::text('step1_title', null, ['class'=>'form-control', 'placeholder' => 'Step 1 Title','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('step1_body', 'Step 1 Body:  (250 chars max, / to start a new line )') !!} 
    {!! Form::text('step1_body', null, ['class' => 'form-control', 'placeholder' => 'Step 1 Body','maxlength' => 250 ]) !!}
</div> 
<div class="form-group">
    {!! Form::label('step2_title', 'Step 2 Title:  (50 chars max)') !!} 
    {!! Form::text('step2_title', null, ['class'=>'form-control', 'placeholder' => 'Step 2 Title','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('step2_body', 'Step 2 Body:  (250 chars max, / to start a new line)') !!} 
    {!! Form::text('step2_body', null, ['class' => 'form-control', 'placeholder' => 'Step 2 Body','maxlength' => 250 ]) !!}
</div> 
<div class="form-group">
    {!! Form::label('step3_title', 'Step 3 Title:  (50 chars max)') !!} 
    {!! Form::text('step3_title', null, ['class'=>'form-control', 'placeholder' => 'Step 3 Title','maxlength' => 50 ]) !!}
</div>
<div class="form-group">
    {!! Form::label('step3_body', 'Step 3 Body:  (250 chars max, / to start a new line)') !!} 
    {!! Form::text('step3_body', null, ['class' => 'form-control', 'placeholder' => 'Step 3 Body','maxlength' => 250 ]) !!}
</div>

<div class="form-group">
    {!! Form::label('steps_media_id', 'Steps Image:') !!} 
    {!! Form::select('steps_media_id', [0 => 'Select an image'] , $tagsDefault, ['class'=>'form-control', 'id'=>'steps_media_id']) !!}
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
    {!! Form::label('tags', 'Tags:') !!} 
    {!! Form::select('tags[]', $tagsOptions, $tagsDefault, ['class'=>'form-control', 'multiple', 'id'=>'tags']) !!}
</div>
            
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!} 
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