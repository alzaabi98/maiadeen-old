@extends('layouts.master')
@section('head')

    <link href="/assets/pages/css/style.css" rel="stylesheet">
	<script src="/assets/pages/js/script.js"></script>
	<link href="/assets/pages/css/bootstrap-editable.css" rel="stylesheet">
    <script src="/assets/pages/js/bootstrap-editable.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>


@stop
@section('content')
<div class="my-courses-header">
	<div class="container">
		<div class="pos-r my-courses-heading"> My Courses </div>
			<ul class="pos-r nav nav-tabs tabs mt10" role="tablist">
				<li class="nv1 mr20">All courses</li>
				<li class="nv2 mr20">Wishlist</li>
				<li class="nv3 mr20">Archived</li>
			</ul>
		</div>
	</div>	
			<div class="clearfix"></div>
			<div class="container">
				<div class="">
					<div class="col-md-3 text-center">
					<div class="plus">
					<div class="cimg"><img class="img-reponsive dimg" src="/assets/pages/img/courseimage.jpg"></div>
					<div class="ccnt">
					<strong class="details__name"> How to Create Your  Course </strong>
					<div class="details__instructor">
				 Instructor Team
				<span > Official  Instructor Account</span>
					</div>
					</div>
					</div>
					</div>
					<div class="col-md-3 text-center"><div class="plus">
					<div class="cimg"><img class="img-reponsive dimg" src="/assets/pages/img/courseimage.jpg"></div>
					<div class="ccnt">
					<strong class="details__name"> How to Create Your  Course </strong>
					<div class="details__instructor">
				 Instructor Team
				<span > Official  Instructor Account</span>
					</div>
					</div>
					</div>
					</div>
					<div class="col-md-3 text-center"><div class="plus">
					<div class="cimg"><img class="img-reponsive dimg" src="/assets/pages/img/courseimage.jpg"></div>
					<div class="ccnt">
					<strong class="details__name"> How to Create Your  Course </strong>
					<div class="details__instructor">
				 Instructor Team
				<span > Official  Instructor Account</span>
					</div>
					</div>
					</div>
					</div>
				    <div class="col-md-3 text-center"><div class="plus">
					<div class="cimg"><img class="img-reponsive dimg" src="/assets/pages/img/courseimage.jpg"></div>
					<div class="ccnt">
					<strong class="details__name"> How to Create Your  Course </strong>
					<div class="details__instructor">
				 Instructor Team
				<span > Official  Instructor Account</span>
					</div>
					</div>
					</div>
					</div>
				</div>
			</div>
</div>

<!--<ul  class="nav nav-pills">
			<li class="active">
        <a  href="#1a" data-toggle="tab">Overview</a>
			</li>
			<li><a href="#2a" data-toggle="tab">Using nav-pills</a>
			</li>
			<li><a href="#3a" data-toggle="tab">Applying clearfix</a>
			</li>
  		<li><a href="#4a" data-toggle="tab">Background color</a>
			</li>
		</ul>
<div id="exTab1" class="container">	


			<div class="tab-content clearfix">
			  <div class="tab-pane active" id="1a">
          <h3>Content's background color is the same for the tab</h3>
				</div>
				<div class="tab-pane" id="2a">
          <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
				</div>
        <div class="tab-pane" id="3a">
          <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>
				</div>
          <div class="tab-pane" id="4a">
          <h3>We use css to change the background color of the content to be equal to the tab</h3>
				</div>
			</div>
  </div>


-->





@stop

