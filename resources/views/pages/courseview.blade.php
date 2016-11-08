@extends('layouts.master')

@section('head')

    <link href="/assets/pages/css/style.css" rel="stylesheet">
	<script src="/assets/pages/js/script.js"></script>

@stop

@section('content')


<div class="container">

	<div class="row">
        <div class="col-lg-12 bhoechie-tab-container ">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bhoechie-tab-menu ">
			
              <div class="list-group">
                <a href="#" class="list-group-item active text-center ">
                  <h4 class="fa fa-book"></h4><br/><?php echo $profession;?> course
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="fa fa-file-video-o" ></h4><br/>Add video
                </a>
                
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 bhoechie-tab mybootclass row ">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                    <center>
                     
    
            <div class="col-md-12">
                <div class="row">
                    
					<div class="mypanel"><span class="fa fa-book"></span> <?php echo $profession;?> Course </div>
                    <div class="panel-body ">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/mycourse', 'class' => 'form-horizontal', 'files' => true]) !!}

                        <div class="form-group {{ $errors->has('userid') ? 'has-error' : ''}}" style="display:none;">
    {!! Form::label('userid', 'Userid', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('userid',null, ['class' => 'form-control']) !!}
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

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
     
	
                    </center>
                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content">
                    <center>
					
                      <div class="col-md-12">
                <div class="row">
                    <div class=" mypanel"><span class="fa fa-file-video-o"></span> Create New video</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/videos', 'class' => 'form-horizontal', 'files' => true]) !!}

             <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                {!! Form::label('title', 'Title', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('title', null, ['class' => 'form-control myborder']) !!}
                    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('url') ? 'has-error' : ''}}">
                {!! Form::label('url', 'video url', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::file('url', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                {!! Form::label('description', 'Description', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::textarea('description', null, ['class' => 'form-control myborder ']) !!}
                    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-4">
                                {!! Form::submit('Upload', ['class' => 'btn  btn-lg mybtn ']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        
                    </center>
                </div>
    
                
            </div>
			<div class="clearfix">
			</div>
        </div>
		
  </div>
</div>



@section('javascript')
@stop

@stop