@extends('layouts.master')
@section('head')

    <link href="/assets/pages/css/style.css" rel="stylesheet">
	<script src="/assets/pages/js/script.js"></script>
	<link href="/assets/pages/css/bootstrap-editable.css" rel="stylesheet">
    <script src="/assets/pages/js/bootstrap-editable.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>


@stop
@section('content')
<div class="container textdirection">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bhoechie-tab-menu ">
      
              <div class="list-group row ">
                <a href="#" class="list-group-item active text-center ">
                  <h4 class="fa fa-book"></h4><br/>Course Landing Page 
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="fa fa-picture-o"></h4><br/>Course Image
                </a>
        <a href="#" class="list-group-item text-center">
                  <h4 class="fa fa-bullseye"></h4><br/>Course Goals
                </a>
        <a href="#" class="list-group-item text-center">
                  <h4 class="fa fa-youtube-play" ></h4><br/>Content
                </a>
        <a href="#" class="list-group-item text-center">
                  <h4 class="fa fa-dollar"></h4><br/>Price
                </a>
        <a href="#" class="list-group-item text-center">
                  <h4 class="fa fa-envelope"></h4><br/>Automatic Message
                </a>
                
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 bhoechie-tab mybootclass row ">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                    <center>
          
                     
        <h1>Edit Profile</h1>
    <hr>
  <div class="row">
      <!-- left column -->
    
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>
        <h3 class="text pb20">Personal info</h3>
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" value="" placeholder=" Enter first name" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" value="" placeholder="Enter last name" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Company:</label>
            <div class="col-lg-8">
              <input class="form-control" value="" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" value="" placeholder="Enter your email" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Time Zone:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="user_time_zone" class="form-control">
                  <option value="Hawaii">(GMT-10:00) Hawaii</option>
                  <option value="Alaska">(GMT-09:00) Alaska</option>
                  <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                  <option value="Arizona">(GMT-07:00) Arizona</option>
                  <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                  <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                  <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                  <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" value="" placeholder="Enter user name" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" value="" type="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" value="" type="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input class="btn btn-primary" value="Save Changes" type="button">
              <span></span>
              <input class="btn btn-default" value="Cancel" type="reset">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
     
  
                    </center>
                </div>

@stop