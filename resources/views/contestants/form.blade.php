<div class="form-group">
    {!! Form::label('name', 'Name:') !!} 
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div> 
<div class="form-group">
    {!! Form::label('email', 'Email:') !!} 
    {!! Form::text('email', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('phone', 'Phone #') !!} 
    {!! Form::text('phone', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('admin', 'Admin:') !!} 
    {!! Form::checkbox('admin', 1, true, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('terms', 'Accepted Marketing Terms:') !!} 
    {!! Form::checkbox('terms', 1, true, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('created_at', 'Created:') !!} 
    {!! Form::input('date','created_at', $startDateDefault, ['class'=>'form-control']) !!}
</div>