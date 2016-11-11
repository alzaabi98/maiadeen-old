@extends('layouts.master')

@section('head')

    <link href="/assets/pages/css/style.css" rel="stylesheet">
	<script src="/assets/pages/js/script.js"></script>

@stop

@section('content')
<div class="course-detail">
<h2><?php echo $profession;?></h2>

</div>
<div class="container new-padding ">

	<div class="row">
        <div class="col-lg-12 bhoechie-tab-container ">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bhoechie-tab-menu ">
			
              <div class="list-group ">
                <a href="#" class="list-group-item active text-center ">
                  <h4 class="fa fa-book"></h4><br/><?php echo $profession;?> course
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4></h4><br/>Add video
                </a>
				<a href="#" class="list-group-item text-center">
                  <h4></h4><br/>Curriculum
                </a>
				<a href="#" class="list-group-item text-center">
                  <h4></h4><br/>Course Landing Page
                </a>
				<a href="#" class="list-group-item text-center">
                  <h4></h4><br/>Price & coupons
                </a>
				<a href="#" class="list-group-item text-center">
                  <h4></h4><br/>Automatic Messages
                </a>
                
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 bhoechie-tab mybootclass row ">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                    <center>
					
                     
    
            <div class="col-md-12">
                <div class="row">
                    
					<div class="form-header"><span class="fa fa-book"></span> <?php echo $profession;?> Course </div>
<div class="panel-body new-align">
<p class="pb30">The first step to creating a great course is deciding who you are creating your course for and what those students are looking to accomplish. This is important information that will help students decide if your course is the right fit for their needs and will appear on your course landing page </p>
                        <div class="manage-fields-wrapper">
<div  class="labeled ">
<label>?What will students need to know or do before starting this course</label>
<p class="sublabel">
<small>?What materials/software do the students need and what actions do they have to perform before the course begins</small>
</p>
<div class="add-form-wrapper ">
<input  class="add-btn btn btn-default" value="Add" type="submit">
<div class="add-form-input-wrapper ">
<input class="new-align" placeholder="?What will students need to know or do before starting this course" type="text">
</div>
</div>
</div>
<div  class="labeled ">
<label>?Who is your target student</label>
<p class="sublabel">
<small>.Think about your students prior experience level, background or current position and their needs, desires or problems</small>
</p>
<div class="add-form-wrapper">
<input  class="add-btn btn btn-default" value="Add"  type="submit">
<div class="add-form-input-wrapper ">
<input class="new-align" placeholder="?Who is your target student" type="text">
</div>
</div>
</div>
<div  class="labeled ">
<label>...At the end of my course, students will be able to</label>
<p class="sublabel">
<small>.Start with a verb. Include details on specific skills students will learn and where students can apply them</small>
</p>
<div class="add-form-wrapper">
<input  class="add-btn btn btn-default" value="Add"  type="submit">
<div class="add-form-input-wrapper ">
<input class="new-align"  placeholder="...At the end of my course, students will be able to" type="text">
</div>
</div>
</div>

</div>
					
				<div><button class=" btn-lg custom-btn section-btn" type="button">Save</button></div>
					

                    </div>
					
            </div>
     
	
                    </center>
                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content">
                    <center>
					
                      <div class="col-md-12">
                <div class="row">
                    <div class="form-header"><?php echo $profession;?> Video</div>
                    <div class="panel-body new-align">
					<div class="mb10">
					<div class="no-test-video mb20">
					<p> Submit a test video to our team for feedback on how you can improve your audio quality, video quality, and on-camera communication skills. A test video is a 2-5 minute lecture video recorded with the same production equipment and setup that you plan to use for your course </p>
					<p>
					Review our
					Test Video Instructions
					before getting started. Creating great video lectures takes lots of trial and error. The more info you provide about the equipment you are using, the more helpful our team can be
					</p>
					<p> Once you submit your test video, you can expect feedback on this page within two business days </p>
					</div>
					</div>
					<form id="test-video-form" class="form-horizontal confirm-unsaved panel panel-default ud-s3videouploadform p30 ng-pristine ng-valid" action="/course/1007110/manage/feedback/test/" name="test-video-form" method="post">
					<div class="flex-wrapper test-video-uploader-wrapper">
					<div class="fx">
					<div id="div_id_asset" class="form-group">
					<label class="control-label col-xs-12 col-sm-2 control-label requiredField" for="id_asset">
					:Video
					<span class="asteriskField">*</span>
					</label>
					<div class="controls col-xs-12 col-sm-10 ">
					<div class=" btn btn-lg custom-btn " style="position: relative; overflow: hidden; direction: ltr;">
					Upload video
					<input qq-button-id="6e3269c6-fc7c-4d75-9a5d-4718db20bea3" accept="video/x-msvideo,video/mpeg,video/x-flv,video/quicktime,video/mp4,audio/x-pn-realaudio,video/ogg,video/webm,video/x-ms-wmv" name="qqfile" style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0; height: 100%;" type="file">

					</div>
					</div>
					</div>
					</div>
					</div>
					<div id="form-item-microphone" class="labeled ">
					<label class="col-xs-12 col-sm-2 ">:Microphone</label>
					<div id="tooltip-reference-microphone" class="tooltip-reference form-field col-xs-12 col-sm-10 input-group  ">
					<input id="id_microphone" class=" custom-height ch-count-field btn-color form-control " data-max-length="75" data-show-counter="true" maxlength="75" name="microphone" placeholder="e.g. Built in mic, Blue Yeti (Optional)" type="text">
					
					</div>
					</div>
					<div id="form-item-camera" class="labeled ">
					<label class="col-xs-12 col-sm-2 control-label">:Camera</label>
					<div id="tooltip-reference-camera" class="tooltip-reference form-field col-xs-12 col-sm-10 input-group ">
					<input id="id_camera" class="custom-height ch-count-field btn-color form-control" data-max-length="75" data-show-counter="true" maxlength="75" name="camera" placeholder="e.g. Canon T3I, Webcam (Optional)" type="text">
					
					</div>
					</div>
					<div id="form-item-light" class="labeled ">
					<label class="col-xs-12 col-sm-2 control-label">:Lighting</label>
					<div id="tooltip-reference-light" class="tooltip-reference form-field col-xs-12 col-sm-10 input-group ">
					<input id="id_light" class="custom-height ch-count-field btn-color form-control" data-max-length="75" data-show-counter="true" maxlength="75" name="light" placeholder="e.g. Lightbox, Overhead lamp (Optional)" type="text">
					
					</div>
					</div>
					<div id="form-item-software" class="labeled ">
					<label class="col-xs-12 col-sm-2 control-label">:Editing Software</label>
					<div id="tooltip-reference-software" class="tooltip-reference form-field col-xs-12 col-sm-10 input-group ">
					<input  class="custom-height ch-count-field btn-color form-control" data-max-length="75" data-show-counter="true" maxlength="75" name="software" placeholder="e.g. Camtasia (Optional)" type="text">
					
					</div>
					</div>
					<div class="form-actions">
					<div class="submit-row">
					<input id="submit-id-submit" class="btn btn-lg custom-btn" name="submit" value="Save"  type="submit">
					</div>
					</div>
                        

                        
					</form>
                    </div>
                </div>
            </div>
        
                    </center>
                </div>
				<div class="bhoechie-tab-content">
                    <center>
					<div class="col-md-12">
                      <div class="row">
                   <div class="form-header">Curriculum </div>
				    <div class="panel-body new-align">
					<div class="form_container">
					<div class="pb20"> Start putting together your course by creating sections, lectures and practice (quizzes and coding exercises) below </div>
				

<ul class="cfi-sortables-list">
<ul class="cfi-chapter-container ui-sortable">
<div class="cfi-content opened">
<span class="content ui-state-default">
<span class="cfi-item-type">Lecture</span>
<span class="cfi-item-number">:</span>
<span class="cfi-item-title" data-purpose="lecture-title-shown">Introduction</span>
<i class="edit-handle udi udi-pencil"></i>
<span class="action-buttons">
<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
   <i class="fa fa-plus" aria-hidden="true"></i>
 </a>
<span class="cfi-item-previewable" style="display: none;">(Preview enabled)</span>
<span class="collapse-btn container-switch"></span>
<i class="sort-handle udi udi-reorder"></i>
</span>
</span>
</div>
<div class="collapse" id="collapseExample">
  <div class="card card-block">
  <a class="btn btn-primary">
    Add description
  </a>
  <a class="btn btn-primary" >
    Add Resources
  </a>
    
  </div>
</div>
</ul>
</ul>
<div class="add-button">
<div class="col-md-4">
<button type = "button" class = "fa fa-plus width100 height100 btn btn-color" data-toggle = "collapse" data-target = "#demo">
   Add lecture
</button>
</div>
<div class="col-md-4 ">
<button type = "button" class = "fa fa-plus width100 height100 btn btn-color" data-toggle = "collapse" data-target = "#demo1">
   Add Quiz
</button>
</div>
<div class="col-md-4 ">
<button type = "button" class = "fa fa-plus width100 height100 btn btn-color" data-toggle = "collapse" data-target = "#demo2">
   Add Coding Exercise
</button>
</div>
</div>
<div id = "demo" class = "collapse  cfi-chapter-container ">
  <li class="cfi-lecture cfi-add-form editing opened">
<span class="content ui-state-default">

<span class="cfi-item-title fx">
<form class="ng-pristine ng-valid" method="post">

<div class="manage-fields-wrapper">
<div id="form-item-title" class="non-labeled ">
<div id="tooltip-reference-title" class="tooltip-reference form-field ">
<input id="id_title" class=" text-input ch-count-field ud-textinput textinput textInput form-control" data-max-length="80" data-purpose="lecture-title" data-show-counter="true" maxlength="80" name="title" placeholder="Enter a Title" value="" type="text">

</div>
</div>
</div>
<div class="form-actions">
<div class="submit-row">
<input id="submit-id-submit" class="btn btn-primary btn btn-primary" name="submit" value="Add Lecture" data-purpose="submit-lecture" type="submit">

</div>
</div>
</form>
</span>
</span>
</li>
</div>
<div id = "demo1" class = "collapse  cfi-chapter-container ">
  <li class="cfi-lecture cfi-add-form editing opened">
<span class="content ui-state-default">

<span class="cfi-item-title fx">
<form class="ng-pristine ng-valid" method="post">

<div class="manage-fields-wrapper">
<div id="form-item-title" class="non-labeled ">
<div id="tooltip-reference-title" class="tooltip-reference form-field ">
<input id="id_title" class=" text-input ch-count-field ud-textinput textinput textInput form-control" data-max-length="80" data-purpose="lecture-title" data-show-counter="true" maxlength="80" name="title" placeholder="Enter a Title" value="" type="text">

</div>
</div>
</div>
<div class="form-actions">
<div class="submit-row">
<input id="submit-id-submit" class="btn btn-primary btn btn-primary" name="submit" value="Add Quiz" data-purpose="submit-lecture" type="submit">

</div>
</div>
</form>
</span>
</span>
</li>
</div>
<div id = "demo2" class = "collapse  cfi-chapter-container ">
  <li class="cfi-lecture cfi-add-form editing opened">
<span class="content ui-state-default">

<span class="cfi-item-title fx">
<form class="ng-pristine ng-valid" method="post">

<div class="manage-fields-wrapper">
<div id="form-item-title" class="non-labeled ">
<div id="tooltip-reference-title" class="tooltip-reference form-field ">
<input id="id_title" class=" text-input ch-count-field ud-textinput textinput textInput form-control" data-max-length="80" data-purpose="lecture-title" data-show-counter="true" maxlength="80" name="title" placeholder="Enter a Title" value="" type="text">

</div>
</div>
</div>
<div class="form-actions">
<div class="submit-row">
<input id="submit-id-submit" class="btn btn-primary btn btn-primary" name="submit" value="Add Coding course" data-purpose="submit-lecture" type="submit">

</div>
</div>
</form>
</span>
</span>
</li>
</div>




					</div>
					</div>
				   </div>
				   <div class="col-md-12">
<button type = "button" class = "fa fa-plus width100 height100 btn  btn-color section-btn" data-toggle = "collapse" data-target = "#demo3">
   Add section
</button>
</div>
<div id="demo3" class="collapse">

<span id="demo3" class="collapse content ui-state-default">

<span class="cfi-item-title fx">
<form class="ng-pristine ng-valid" method="post">
<div class="manage-fields-wrapper">
<div id="form-item-title" class="non-labeled ">
<div id="tooltip-reference-title" class="tooltip-reference form-field ">
<input id="id_title" class="text-input ch-count-field ud-textinput textinput textInput form-control user-success" data-max-length="80" data-purpose="chapter-title" data-show-counter="true" maxlength="80" name="title" placeholder="Enter a Title" value="" type="text">

</div>
</div>
<div id="form-item-description" class="labeled ">
<label class="">?What will students be able to do at the end of this section</label>
<div id="tooltip-reference-description" class="tooltip-reference form-field ">
<input id="id_description" class=" text-input ch-count-field ud-textinput textinput textInput form-control" data-max-length="200" data-purpose="chapter-objective" data-show-counter="true" maxlength="200" name="description" placeholder="Enter a Learning Objective" value="" type="text">

</div>
</div>
</div>
<div class="form-actions">
<div class="submit-row">
<input id="submit-id-submit" class="btn btn-primary btn btn-primary" name="submit" value="Add Section" data-purpose="submit-chapter" type="submit">

</div>
</div>
</form>
</span>
</span>
</div>
					  </div>
                    </center>
                </div>
    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
                    <center>
					<div class="col-md-12">
                      <div class="row">
                   <div class="form-header">Course Landing Page </div>
				   <div class="panel-body new-align">
				   <div class="form_container">
				   <div class="pb20"> Your Course Landing Page is the first thing students see when they find your course in the marketplace and will influence student enrollments. Fill in the details below to build your landing page, and click ‘Preview’ to see how it will appear to students in the marketplace. </div>
					<form class="confirm-unsaved ud-categorization ng-pristine ng-valid" name="course-manage-form" action="/course/1007110/manage/basics/" method="post">
					<div class="manage-fields-wrapper">
					<div id="form-item-title" class="labeled ">
					<label class="">Course Title</label>
					<div id="tooltip-reference-title" class=" btn-color tooltip-reference form-field ">
					<input id="id_title" class="custom-height text-input ch-count-field ud-textinput form-field-watcher textinput textInput form-control" data-max-length="60" data-purpose="edit-course-title" data-show-counter="true" maxlength="60" name="title" placeholder=".Insert your course title" value="" type="text">
					
					</div>
					</div>
					<div id="form-item-headline" class="labeled ">
					<label class="">Course Subtitle</label>
					<div id="tooltip-reference-headline" class=" btn-color tooltip-reference form-field ">
					<input id="id_headline" class="custom-height text-input ch-count-field ud-textinput form-field-watcher textinput textInput form-control" data-max-length="120" data-purpose="course-headline" data-show-counter="true" maxlength="120" name="headline" placeholder=".Insert your course subtitle" style="resize:none;overflow:auto;" type="text">
					</div>
					</div>
					<div id="form-item-headline" class="labeled ">
					
					<div class="col-md-6"><label class="">Course Image</label>
					
					<img src="/assets/pages/img/courseimage.png "  style="width:400px;height:300px;">
					</div>
					<div class="col-md-6"><p>
					Please review our
					<a target="_blank">course image quality standards</a>
					carefully to ensure your image is approved. Required dimensions: 2048x1152 pixels. Required format: .jpg, .jpeg, .gif, .bmp or .png.
					</p>
					<p>
					If you would like some help, fill out this
					<a target="_blank"> simple request form</a>
					and our team of designers can create a custom image for you.
					</p>
					<div class="inputfile ">
					<input type="file">
					</div>
					</div>
					</div>
					<label class="">Basic info</label>
					<div id="form-item-title" class="labeled ">
					
					<div class="col-md-4 ">
					<select id="id_locale" class="form-field-watcher select form-control user-success" data-purpose="course-language" name="locale">
<option value="af_ZA">Afrikaans</option>
<option value="sq_AL">Shqip</option>
<option value="ar_AR">العربية</option>
<option value="hy_AM">Հայերեն</option>
<option value="ay_BO">Aymar aru</option>
<option value="az_AZ">Azərbaycan dili</option>
<option value="eu_ES">Euskara</option>
<option value="bn_IN">Bangla</option>
<option value="bs_BA">Bosanski</option>
<option value="bg_BG">Български</option>
<option value="ca_ES">Català</option>
<option value="ck_US">Cherokee</option>
<option value="hr_HR">Hrvatski</option>
<option value="cs_CZ">Čeština</option>
<option value="da_DK">Dansk</option>
<option value="nl_NL">Nederlands</option>
<option value="nl_BE">Nederlands (België)</option>
<option value="en_IN">English (India)</option>
<option value="en_GB">English (UK)</option>
<option value="en_US" selected="selected">English (US)</option>
<option value="et_EE">Eesti</option>
<option value="fo_FO">Føroyskt</option>
<option value="tl_PH">Filipino</option>
<option value="fi_FI">Suomi</option>
<option value="fr_CA">Français (Canada)</option>
<option value="fr_FR">Français (France)</option>
<option value="fy_NL">Frysk</option>
<option value="gl_ES">Galego</option>
<option value="ka_GE">ქართული</option>
<option value="de_DE">Deutsch</option>
<option value="el_GR">Ελληνικά</option>
<option value="gn_PY">Avañe'ẽ</option>
<option value="gu_IN">ગુજરાતી</option>
<option value="ht_HT">Ayisyen</option>
<option value="he_IL">‏עברית‏</option>
<option value="hi_IN">हिन्दी</option>
<option value="hu_HU">Magyar</option>
<option value="is_IS">Íslenska</option>
<option value="id_ID">Bahasa Indonesia</option>
<option value="ga_IE">Gaeilge</option>
<option value="it_IT">Italiano</option>
<option value="ja_JP">日本語</option>
<option value="jv_ID">Basa Jawa</option>
<option value="kn_IN">Kannaḍa</option>
<option value="kk_KZ">Қазақша</option>
<option value="km_KH">Khmer</option>
<option value="ko_KR">한국어</option>
<option value="ku_TR">Kurdî</option>
<option value="lv_LV">Latviešu</option>
<option value="li_NL">Lèmbörgs</option>
<option value="lt_LT">Lietuvių</option>
<option value="mk_MK">Македонски</option>
<option value="mg_MG">Malagasy</option>
<option value="ms_MY">Bahasa Melayu</option>
<option value="ml_IN">Malayāḷam</option>
<option value="mt_MT">Malti</option>
<option value="mr_IN">मराठी</option>
<option value="mn_MN">Монгол</option>
<option value="ne_NP">नेपाली</option>
<option value="se_NO">Davvisámegiella</option>
<option value="nb_NO">Norsk (bokmål)</option>
<option value="nn_NO">Norsk (nynorsk)</option>
<option value="ps_AF">پښتو</option>
<option value="fa_IR">فارسی</option>
<option value="pl_PL">Polski</option>
<option value="pt_BR">Português (Brasil)</option>
<option value="pt_PT">Português (Portugal)</option>
<option value="pa_IN">ਪੰਜਾਬੀ</option>
<option value="qu_PE">Qhichwa</option>
<option value="ro_RO">Română</option>
<option value="rm_CH">Rumantsch</option>
<option value="ru_RU">Русский</option>
<option value="sa_IN">संस्कृतम्</option>
<option value="sr_RS">Српски</option>
<option value="zh_CN">中文(简体)</option>
<option value="sk_SK">Slovenčina</option>
<option value="sl_SI">Slovenščina</option>
<option value="so_SO">Soomaaliga</option>
<option value="es_LA">Español</option>
<option value="es_CL">Español (Chile)</option>
<option value="es_CO">Español (Colombia)</option>
<option value="es_MX">Español (México)</option>
<option value="es_ES">Español (España)</option>
<option value="es_VE">Español (Venezuela)</option>
<option value="sw_KE">Kiswahili</option>
<option value="sv_SE">Svenska</option>
<option value="sy_SY">Leššānā Suryāyā</option>
<option value="tg_TJ">тоҷикӣ, تاجیکی‎, tojikī</option>
<option value="ta_IN">தமிழ்</option>
<option value="tt_RU">татарча / Tatarça / تاتارچا</option>
<option value="te_IN">Telugu</option>
<option value="th_TH">ภาษาไทย</option>
<option value="zh_HK">中文(香港)</option>
<option value="zh_TW">中文 (繁體)</option>
<option value="tr_TR">Türkçe</option>
<option value="uk_UA">Українська</option>
<option value="ur_PK">اردو</option>
<option value="uz_UZ">O'zbek</option>
<option value="vi_VN">Tiếng Việt</option>
<option value="cy_GB">Cymraeg</option>
<option value="xh_ZA">isiXhosa</option>
<option value="yi_DE">ייִדיש</option>
<option value="zu_ZA">isiZulu</option>
</select>
					</div>
					<div class="col-md-4">
					<select id="id_instructional_level" class="form-field-watcher select form-control user-success" inline-class="inline" name="instructional_level">
<option value="" selected="selected">-- Select Level --</option>
<option value="1">Beginner Level</option>
<option value="2">Intermediate Level</option>
<option value="3">Expert Level</option>
<option value="0">All Levels</option>
</select>
					</div>
					<div class="col-md-4 ">
					<select id="primaryCourseCategoryId" class=" form-field-watcher select form-control user-success" data-purpose="course-category" name="category" onchange="$(this).trigger("course_category_changed")">
<option value="" selected="selected">-- Select Category --</option>
<option value="288">Development</option>
<option value="268">Business</option>
<option value="294">IT & Software</option>
<option value="292">Office Productivity</option>
<option value="296">Personal Development</option>
<option value="269">Design</option>
<option value="290">Marketing</option>
<option value="274">Lifestyle</option>
<option value="273">Photography</option>
<option value="276">Health & Fitness</option>
<option value="277">Teacher Training</option>
<option value="278">Music</option>
<option value="300">Academics</option>
<option value="279">Language</option>
<option value="298">Test Prep</option>
</select>
					
					</div>
					</div>
					

					
					
					
			</div>
					</form>
					</div>
					</div>
				   </div>
					  </div>
                    </center>
                </div>
                <div class="bhoechie-tab-content">
                    <center>
					<div class="col-md-12">
                      <div class="row">
                   <div class="form-header">Price & coupons </div>
				   <div class="panel-body new-align">
				   <div class="form_container">
				   <div class="pb20"> Select the currency and price of your course below and click ‘Save’. Once completed, you will be able to create instructor coupons based on your selected price. To create a Free course, select a price of ‘Free‘ </div>
				   <div class="price-section">
				   <label>Course price</label>
				   <div class="price-drop-down">
				   
				   <button class="btn-lg custom-btn " type="button">Save</button>
				   <select>
				   <option value="" selected="selected"></option>
					<option value="20">$20</option>
					<option value="25">$25</option>
					<option value="30">$30</option>
					<option value="35">$35</option>
					<option value="40">$40</option>
					<option value="45">$45</option>
					<option value="50">$50</option>
					<option value="55">$55</option>
					<option value="60">$60</option>
					<option value="65">$65</option>
					<option value="70">$70</option>
					<option value="75">$75</option>
					<option value="80">$80</option>
					<option value="85">$85</option>
					<option value="90">$90</option>
					<option value="95">$95</option>
					<option value="100">$100</option>
					<option value="100">$105</option>
					<option value="100">$110</option>
					<option value="100">$115</option>
					<option value="100">$120</option>
					<option value="100">$125</option>
					<option value="100">$130</option>
					<option value="100">$135</option>
					<option value="100">$140</option>
				   </select>
				   <select>
				   <option value="usd" selected="selected">USD</option>
					<option value="eur">EUR</option>
					<option value="gbp">GBP</option>
					<option value="jpy">JPY</option>
					<option value="sgd">SGD</option>
					<option value="mxn">MXN</option>
					<option value="brl">BRL</option>
					<option value="cad">CAD</option>
					<option value="aud">AUD</option>
					<option value="thb">THB</option>
					<option value="ils">ILS</option>
					<option value="twd">TWD</option>
				   </select>
					
					
					<p>
Please complete our premium instructor application found here in order to update your course price
</p>
<div class="form-header"></div>
				   
				   </div>
				   </div>
				   <div class="coursecoupons">
				   
				   <button class="btn-lg custom-btn" type="button">Create new coupon</button>
				   <label> :Course Coupons
				   </label>
				   </div>
				   </div>
					</div>
				   </div>
					  </div>
                    </center>
                </div>
				<div class="bhoechie-tab-content">
                    <center>
					<div class="col-md-12">
                      <div class="row">
                   <div class="form-header">Automatic Messages</div>
				   <div class="panel-body new-align">
				   <div class="form_container">
				   <div class="pb20"> Write messages to your students (optional) that will be sent automatically when they join or complete your course to encourage students to engage with course content. If you do not wish to send a welcome or congratulations message, leave the text box blank </div>
					<form class="confirm-unsaved ng-pristine ng-valid" name="course-manage-form" action="/course/1007110/manage/communications/messages/" method="post">

<div class="manage-fields-wrapper">
<div id="form-item-welcome" class="labeled ">
<label class="cursor-default">Welcome Message</label>
<div id="tooltip-reference-welcome" class="tooltip-reference form-field ">
<textarea id="id_welcome" class="btn-color form-control" cols="40" data-max-length="1000" data-purpose="edit-welcome" data-show-counter="true" maxlength="1000" name="welcome" rows="4"></textarea>

</div>
</div>
<div id="form-item-complete" class="labeled ">
<label>Congratulations Message</label>
<div id="tooltip-reference-complete" class="tooltip-reference form-field ">
<textarea id="id_complete" class="btn-color form-control" cols="40" data-max-length="1000" data-purpose="edit-complete" data-show-counter="true" maxlength="1000" name="complete" rows="4"></textarea>

</div>
</div>
</div>
<div class="form-actions">
<div class="submit-row">
<input id="submit-id-submit" class="btn btn-lg custom-btn" name="submit" value="Save" type="submit">
</div>
</div>
<input id="id_ignore_warnings" name="ignore_warnings" value="False" type="hidden">
</form>
</div>
					</div>
				   </div>
					  </div>
                    </center>
                </div>
				
				
				
    
                
            </div>
			
			
        </div>
		
  </div>
</div>



@section('javascript')
@stop

@stop
