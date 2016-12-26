@extends('layouts.master')
@section('head')

    <link href="/assets/pages/css/style.css" rel="stylesheet">
	<script src="/assets/pages/js/script.js"></script>
	<link href="/assets/pages/css/bootstrap-editable.css" rel="stylesheet">
    <script src="/assets/pages/js/bootstrap-editable.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>


@stop
@section('content')
<div>
	<div class="container">
		<div class="row">
			<div class="instruct-head">
				<div class="instruct-title">
					<div class="top-left new-align ml">
							<h2>Instructor Dashboard</h2>
							<ul class="nav nav-tabs "><li>course</li>
							<li>Q&A</li>
							<li>Reviews</li></ul>
					</div>
					<button id="dLabel" class="btn btn-default" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Create a new...
<i class="udi udi-chevron-down"></i>
</button>
				</div>
			</div>
		</div>
	</div>		
</div>
@stop
