@extends('layouts.master')

@section('head')

    <link href="/assets/pages/css/style.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="/assets/pages/css/animations.css" type="text/css"> -->
	
   
@stop

@section('content')

	<div class="white-bg">
		<div class="container">
			<div class="row main">
				
				<div class="main-login main-center">
					<form class="form-horizontal">
						
					

						<div class="form-group">
						<div class="mylabel">
							<label class="yellow">?Ready to Create a Course</label>
							<p>:Start by entering the title of a course</p>
							</div>
							<div class="cols-sm-10">
								<div class="input-group">
									
									<input type="text" class="form-control text" name="email" id="email"  placeholder="Enter the name of course"/>
								</div>
							</div>
						</div>

						

						

						
						<div class="form-group ">
							<button type="button" name="submit" id="mybtn" class="btn btn-primary btn-lg btn-block login-button">Create course</button>
						</div>
				
					</form>
				</div>
			</div>
		</div>
	</div>
<script>
$( "#mybtn" ).click(function() {
	var course = $( "#email" ).val();
  alert(course);
});
		</script>

		
@stop