@extends('layouts.master')
@section('head')

    <link href="/assets/pages/css/style.css" rel="stylesheet">
	<script src="/assets/pages/js/script.js"></script>
	<link href="/assets/pages/css/bootstrap-editable.css" rel="stylesheet">
    <script src="/assets/pages/js/bootstrap-editable.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="/assets/pages/js/fileinput.js" type="text/javascript"></script>
	<script src="/assets/pages/js/rcrop.min.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.1/tinymce.min.js" type="text/javascript"></script>

  <script>
 tinymce.init({
  selector: 'textarea',  // change this value according to your HTML
  toolbar: " bold italic ",
});

</script>

@stop
@section('content')
<!--new tab-->
<div class="container textdirection">
<div class="row">
<div class="col-md-3 col-xs-12">
<div class="left-menu-section">
<ul class="nav nav-tabs">
   <span id="profile-img-show"><img id="profile-left-img" src="/assets/pages/img/profile-pic.png" alt="profile-img"></span>
    <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>

    <li><a href="{{url('/mycourses')}}" >View Public Profile</a></li>

    <li><a href="#favourite" data-toggle="tab">Photo</a></li>

    <li><a href="#download" data-toggle="tab">Account</a></li>

    <li><a href="#stars" data-toggle="tab">Privacy</a></li>

    <li><a href="#settings" data-toggle="tab">Notification</a></li>

  </ul>
  </div>
</div>
   
<div class=" col-md-9 col-xs-12">
  <div id="myTabContent" class="tab-content">

				<div class="tab-pane active" id="home">

							<div class="personal-info ">
								<div class="alert alert-info alert-dismissable">
								  <a class="panel-close close" data-dismiss="alert">×</a> 
								  <p class="text-center">
								  This is an <strong>Alert</strong> message
								  </p>
								</div>
								<h3 class="text-center">Personal info</h3>
							  
							  <form class="form-horizontal" role="form">
									<div class="form-group">
									  
									  <div class="col-lg-12 ">
										<input class="form-control hgt" value="{{Auth::user()->firstname}}" type="text">
									  </div>
									</div>
									<div class="form-group">
									  
									  <div class="col-lg-12">
										<input class="form-control hgt" value="{{Auth::user()->lastname}}" type="text">
									  </div>
									</div>
									
									

									<div class="form-group">
									  
									  <div class="col-lg-12">
										<div class="ui-select">
										  <select id="select-language" class="form-control hgt">
											<option value="">-- Select Language --</option>
											<option value="de_DE">Deutsch</option>
											<option value="en_US" selected="selected">English (US)</option>
											<option value="es_ES">Español (España)</option>
											<option value="fr_FR">Français (France)</option>
											<option value="it_IT">Italiano</option>
											<option value="ja_JP">日本語</option>
											<option value="ko_KR">한국어</option>
											<option value="pt_BR">Português (Brasil)</option>
											<option value="ru_RU">Русский</option>
											<option value="tr_TR">Türkçe</option>
											<option value="zh_CN">中文(简体)</option>
											<option value="zh_TW">中文 (繁體)</option>
											
										  </select>
										</div>
									  </div>
									</div>
									<div class="Biography_wrapper">
									<h2>Biography</h2>
									<div class="Biography-section">
									 
								<form method="post">
									<textarea id="mytextarea">Hello, World!</textarea>
								  </form>
									</div>
									</div>
                                       <div class="profile-link-section">
									   <h2>Link</h2>
										<div class="input-group">
										<span class="input-group-addon">https://plus.google.com/</span>
										<input id="id_google_profile" class="textinput textInput form-control user-success hgt" maxlength="128" name="google_profile" placeholder="Google+ Link" type="text">
										</div>
										<div class="input-group">
										<span class="input-group-addon">http://twitter.com/</span>
										<input id="id_twitter_profile" class="textinput textInput form-control hgt" maxlength="128" name="twitter_profile" placeholder="Twitter Profile" type="text">
										</div>
										<div class="input-group">
										<span class="input-group-addon">http://www.facebook.com/</span>
										<input id="id_facebook_profile" class="textinput textInput form-control hgt" maxlength="128" name="facebook_profile" placeholder="Facebook Profile" type="text">
										</div>
										<div class="input-group ">
										<span class="input-group-addon">http://www.linkedin.com/</span>
										<input id="id_linkedin_profile" class="textinput textInput form-control hgt" maxlength="128" name="linkedin_profile" placeholder="LinkedIn Profile" type="text">
										</div>
										<div class="input-group ">
										<span class="input-group-addon">http://www.youtube.com/</span>
										<input id="id_youtube_profile" class="textinput textInput form-control hgt" maxlength="128" name="youtube_profile" placeholder="Youtube Profile" type="text">
										</div>

									<div class="profile-save-button">
									<div class="form-group">
									 
										<input class="btn btn-primary" value="Save Changes" type="button">
										
									</div>  
									</div>
							  </form>
							</div>
							</div>
						
					
					

				</div>


    <div class="tab-pane" id="favourite">
 
    <div class="proifle-img-upload">
	
	<form id="form1" runat="server" enctype="multipart/form-data">
	<div class="form-group">
    <input type='file' id="fileinput-upload-button" name="file-fr[]" multiple />
  
	</div>

     </form>
	</div>
    								
    </div>

    <div class="tab-pane" id="download">

     <form class="form-horizontal" role="form">
									<div class="form-group">
									  <label class="col-md-3 control-label">Email:</label>
									  <div class="col-md-8">
										<input class="form-control" value="{{Auth::user()->email}}" placeholder="Enter Username or Email"type="text">
									  </div>
									</div>
									<div class="form-group">
									  <label class="col-md-3 control-label">Password:</label>
									  <div class="col-md-8">
										<input class="form-control" value="" placeholder="Enter New Password" type="password">
									  </div>
									</div>
									<div class="form-group">
									  <label class="col-md-3 control-label">Confirm password:</label>
									  <div class="col-md-8">
										<input class="form-control" value="" placeholder="Re-type New Password" type="password">
									  </div>
									</div>
									<div class="form-group">
									  <label class="col-md-3 control-label"></label>
									  <div class="col-md-8">
										<input class="btn btn-primary" value="Change Password" type="button">
										<span></span>
										<input class="btn btn-default" value="Cancel" type="reset">
									  </div>
									</div>
									</form>

    </div>

    <div class="tab-pane" id="stars">
<div class="form-section"><p class="blockLabel">Profile Page Settings:</p>
<div class="multiField">
<div class="" id="form-item-profile_visible">
<div id="tooltip-reference-profile_visible" class="tooltip-reference form-field pos-r  ">
<div class="checkbox">
<label for="id_profile_visible" class="cursor-default">
<input checked="checked" name="profile_visible" id="id_profile_visible" type="checkbox">
<span class="checkbox-label">
                Show my profile on search engines.
            </span>
            </label>
            </div>
            </div>
            </div>
            <div class="" id="form-item-courses_visible">
            <div id="tooltip-reference-courses_visible" class="tooltip-reference form-field pos-r  ">
            <div class="checkbox">
            <label for="id_courses_visible" class="cursor-default">
            <input checked="checked" name="courses_visible" id="id_courses_visible" type="checkbox">
            <span class="checkbox-label">
                Show courses I am taking on my profile page.
            </span>
            </label>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="form-group">
									  <label class="col-md-3 control-label"></label>
									  <div class="col-md-8">
										<input class="btn btn-primary" value="Save" type="button">
										<span></span>
										<input class="btn btn-default" value="Cancel" type="reset">
									  </div>
									</div>
    </div>

    <div class="tab-pane" id="settings">
 	
    <div class="container col-md-12 notification">
             <div class="checkbox">
             <label for="id_courses_visible" class="cursor-default">
            <input checked="checked" name="courses_visible" id="id_courses_visible" type="checkbox">
            <span class="checkbox-label">
                My course progress.
            </span>
            </label>

             </div>
            <div class="" id="form-item-courses_visible">
            <div id="tooltip-reference-courses_visible" class="tooltip-reference form-field pos-r  ">
            <div class="checkbox">
            <label for="id_courses_visible" class="cursor-default">
            <input checked="checked" name="courses_visible" id="id_courses_visible" type="checkbox">
            <span class="checkbox-label">
                Don't send me any emails.
            </span>
            </label>
            </div>
            </div>
            </div>
            <div class="form-group">
									  <label class="col-md-3 control-label"></label>
									  <div class="col-md-8">
										<input class="btn btn-primary" value="Save" type="button">
										
										
									  </div>
									</div>
    </div>

    </div>

  </div>
  </div>
  </div>
</div>
<script>
$(document).on('click', '.browse', function(){
  var file = $(this).parent().parent().parent().find('.file');
  file.trigger('click');
});
$(document).on('change', '.file', function(){
  $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
});
 function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-show').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#profileimgInp").change(function(){
        readURL(this);
    });
	
					 function readURL(input) {

				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#profile-top-img').attr('src', e.target.result);
					}

					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#fileinput-upload-button").change(function(){
				readURL(this);
			});
					
	 $('#fileinput-upload-button').fileinput({
        language: 'fr',
        uploadUrl: '#',
        allowedFileExtensions : ['jpg', 'png','gif'],
    });
	$(document).on('click', '.fileinput-upload-button', function(){
		var  profileimg = $('.kv-file-content img').attr('src');	
       $('#profile-left-img').attr('src', profileimg);
      
				
	});


          
    </script>
@section('javascript')


@stop
@stop