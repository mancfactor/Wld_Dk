<div class="form-group">
    {!! Form::label('name', 'Name:') !!} 
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div> 
<div class="form-group">
    {!! Form::label('slogan', 'Slogan:') !!} 
    {!! Form::text('slogan', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Description:') !!} 
    {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('active', 'Active:') !!} 
    {!! Form::checkbox('active', 1, true, ['class'=>'form-control']) !!}
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
    {!! Form::label('hashtag', 'Hashtag:') !!} 
    {!! Form::text('hashtag', null, ['class'=>'form-control']) !!}
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