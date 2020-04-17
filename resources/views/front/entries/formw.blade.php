<style>
.form-control{
    border: 1px solid #bcb7b4;
    background: #fff;
    min-height: 32px;
    display: block;
    width: 85%;
}
label {
    display: block;
    line-height: 1.2em;
    color: #000;
}
</style>
<div  class="form-field">
    {!! Form::label('name', 'Name:', array('class' => 'label--float')) !!} 
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div> 
<div  class="form-field">
    {!! Form::label('designer', 'Designer:', array('class' => 'label--float')) !!} 
    {!! Form::text('designer', null, ['class' => 'form-control']) !!}
</div> 
<div  class="form-field">
    {!! Form::label('contest_id', 'Contest:', array('class' => 'label--float')) !!} 
    {!! Form::select('contest_id', $contestOptions,$contestDefault, ['class'=>'form-control']) !!}
</div>
<div  class="form-field">
    {!! Form::label('description', 'Description:', array('class' => 'label--float')) !!} 
    {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
</div>
<!--
<div  class="form-field">
    {!! Form::label('approved', 'Approved:') !!} 
    {!! Form::checkbox('approved', 1, true, ['class'=>'form-control']) !!}
</div>
-->
<div  class="form-field">
    {!! Form::label('hashtag', 'Hashtag:', array('class' => 'label--float')) !!} 
    {!! Form::text('hashtag', null, ['class'=>'form-control']) !!}
</div>

<div  class="form-field">
    {!! Form::label('media', 'Upload Images:',array('class' => 'label--float')) !!} 
    {!! Form::file('media', null, ['class'=>'form-control', 'id'=>'media']) !!}
</div>

<!--
<div  class="form-field">
    {!! Form::label('tags', 'Tags:') !!} 
    {!! Form::select('tags[]', $tagsOptions, $tagsDefault, ['class'=>'form-control', 'multiple', 'id'=>'tags']) !!}
</div>
-->
<br />        
<div  class="form-field">
    {!! Form::submit($submitButtonText, ['class'=>'btn']) !!} 
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