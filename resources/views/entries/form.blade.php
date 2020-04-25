<div class="form-group">
    {!! Form::label('name', 'Name:') !!} 
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div> 
<div class="form-group">
    {!! Form::label('designer', 'Designer:') !!} 
    {!! Form::text('designer', null, ['class' => 'form-control']) !!}
</div> 
<div class="form-group">
    {!! Form::label('contest_id', 'Contest:') !!} 
    {!! Form::select('contest_id', $contestOptions,$contestDefault, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Description:') !!} 
    {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('approved', 'Approved:') !!} 
    {!! Form::radio('approved', 1, true, ['class'=>'']) !!} Yes
    {!! Form::radio('approved', 0, false, ['class'=>'']) !!} No
</div>
<div class="form-group">
    {!! Form::label('hashtag', 'Hashtag:') !!} 
    {!! Form::text('hashtag', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('media', 'Upload Images:') !!} 
    {!! Form::file('media', null, ['class'=>'form-control', 'id'=>'media']) !!}
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