

@extends('layouts.main')


@section('content')

	@foreach ($courses as $course)
		<div class="col-md-4 col-sm-6">
			<div class="recipe-box">
			  <div class="box-image">
			    <a href="#">
			      <span class="new-badge">New</span>
			      <img src="assets\img\100x100.png" alt="Image 1">
			    </a>
			  </div>
			  <div class="box-content">
			  	<?php $title = str_limit($course->title, 40)?>
			    <h2><a href="#"> {{$title}}</a></h2>
			    <div class="box-meta">
			      By <a href="#">test</a> <i class="glyphicon glyphicon-time"></i> <time>45</time>
			    </div>
			  
			  </div>
			</div>
	        
		</div>
	@endforeach

@endsection

{{--App\Course::find($course->id)->teacher->name--}}