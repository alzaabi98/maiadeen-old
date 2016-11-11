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
					
                     
    
            <div class="col-md-12">
                <div class="row">
                    
					<div class="form-header"><?php echo $profession;?> Course </div>
<div class="panel-body new-align">

                        <div class="manage-fields-wrapper">
						<div id="form-item-complete" class="labeled ">
						<label>Course Description</label>
						<div id="tooltip-reference-complete" class="tooltip-reference form-field ">
						<textarea id="id_complete" class="btn-color form-control" cols="40" data-max-length="1000" data-purpose="edit-complete" data-show-counter="true" maxlength="1000" name="complete" rows="8"></textarea>

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
					
					
					<div id="form-item-headline" class="labeled ">
					<label>Upload image</label>
					
					
					<form id="form1" runat="server">
						
			
			<img class="col-md-6" id="blah" src="/assets/pages/img/courseimage.png" style="width:400px;height:300px;" alt="your image" />
		</form>
					
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
					
					<input type='file' id="imgInp" />					

					
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
    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
                    <center>
					<div class="col-md-12">
                      <div class="row">
                   <div class="form-header">Content </div>
				   <div class="panel-body new-align">
				   
				   <div class="addlecture newpadding ">
				   <label>Add lecture</label>
				   <input class=" lecturepadding width100 mylabel btn-color " type="text" placeholder="Enter title of lecture"></div>
				   
				   <div class="lecturedescription newpadding ">
				   <label>Add lecture decription</label>
				   <textarea rows="8" class="width100 mylabel btn-color newpadding"></textarea>
				   </div>
				   
				   <div class="addvideo newpadding ">
				   <label>Add lecture video</label>
				   <input class=" lecturepadding width100 mylabel btn-color " type="file">	
					</div>				   
				   </div>
					  </div>
                    </center>
                </div>
                <div class="bhoechie-tab-content">
                    <center>
					<div class="col-md-12">
                      <div class="row">
                   <div class="form-header">Price</div>
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

</div>
<div id="form-item-complete" class="labeled ">
<label>Congratulations Message</label>
<div id="tooltip-reference-complete" class="tooltip-reference form-field ">
<textarea id="id_complete" class="btn-color form-control" cols="40" data-max-length="1000" data-purpose="edit-complete" data-show-counter="true" maxlength="1000" name="complete" rows="4"></textarea>

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
<script>
 function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        readURL(this);
    });
    </script>
@stop

@stop
