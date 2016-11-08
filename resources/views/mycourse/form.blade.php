<div class="form-group {{ $errors->has('userid') ? 'has-error' : ''}}" style="display:none;">
    {!! Form::label('userid', 'Userid', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('userid',Auth::user()->id, ['class' => 'form-control']) !!}
        {!! $errors->first('userid', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('titlt') ? 'has-error' : ''}}">
    {!! Form::label('titlt', 'Title', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('titlt', null, ['class' => 'form-control inputborder']) !!}
        {!! $errors->first('titlt', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group {{ $errors->has('aims') ? 'has-error' : ''}}">
    {!! Form::label('aims', 'Aims', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('aims', null, ['class' => 'form-control inputborder']) !!}
        {!! $errors->first('aims', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('image', null, ['class' => 'form-control ']) !!}
        {!! $errors->first('image', '<p class="help-block ">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Description', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('description', null, ['class' => 'form-control inputborder']) !!}
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>



<div class="form-group ">
    <div class="col-md-offset-4 col-md-4 ">

        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Submit', ['class' => ' btn  btn-lg mybtn  ']) !!}
		
    </div>
</div>