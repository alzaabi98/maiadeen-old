@extends('layouts.master')

@section('head')

    <link href="/assets/pages/css/style.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="/assets/pages/css/animations.css" type="text/css"> -->
	
   
@stop

@section('content')

          
              
               
		<div class="container">
			<div class="row main">
				
				<div class="main-login main-center">
				<div class="form-group">
						<div class="mylabel lh">
							<label>?Ready to Create a Course</label>
							<p>:Start by entering the title of a course</p>
							</div>
							<div class="cols-sm-10">
								
								@if (Auth::check())
								{!! Form::open(['route' => ['writer_path']]) !!}
							     @else
									 @section('javascript')
								<script>
								$("#hello").click(function(){
								$("#popup").css("display","block");
								});
								</script>
								
								@stop
								 
							    @endif
								
								{!! Form::text('profession', '',array('required', 
								'class'=>'form-control text inheight', 
								'placeholder'=>'Enter the name of course')) !!}
								{!! Form::submit('Create course', array('id'=>'hello','class' => 'crsbtn form-group btn btn-warning btn-lg btn-block login-button')) !!}
							    <div id="popup" class="text" style="display:none">Please <a href="/login" style="color:#EB961E">login</a> first to create course</div>
								{!! Form::close() !!}
								
						
							</div>
						</div>
						</div>
			</div>
		</div>

		
@stop

