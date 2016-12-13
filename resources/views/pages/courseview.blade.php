@extends('layouts.master')

@section('head')

    <link href="/assets/pages/css/style.css" rel="stylesheet">
	<script src="/assets/pages/js/script.js"></script>
	<link href="/assets/pages/css/bootstrap-editable.css" rel="stylesheet">
    <script src="/assets/pages/js/bootstrap-editable.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>


@stop

@section('content')
<div class="course-detail">


</div>
<div class="container new-padding ">

	<div class="row borderclass">
        <div class="col-lg-12 bhoechie-tab-container ">
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
					
                     
    
            <div class="col-md-12">
                <div class="row">
                    
					<div class="form-header"> Course </div>
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
                    <div class="form-header"> Video</div>
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
					
					<!--<input type='file' id="imgInp" />-->					
<div class="form-group textdirection">
    <input type="file" id="imgInp" name="img[]" class="file">
    <div class="input-group col-xs-12">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
      <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
      <span class="input-group-btn">
        <button class="browse btn btn-success input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
      </span>
    </div>
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
                    
					<div class="form-header"><span class="fa fa-book"></span> Course </div>
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
				   
				   
		
				<!-- <div class=" lecid2  login-button">
				</div> -->
        		
  <div class="row textdirection">
    <div class="col-sm-6 col-md-12">
        <div class="panel-group ">
            <div class="panel panel-default lecid lecid1 login-button">
                
                <div class="lecturepadding  right-text ">

					
                <div class="entry width100  input-group  ch-count-field">
					
					 Add first section
				</div>
					 
					
                     					 
                    	
						
						
					
                    </div>
                

                </div>
					
                
                
				
	
		</div>
							
							
    
				<div id="add" class="adding-button ">
					<div id="add1"><button class="width100  btn-lg btn-color  add1" style="display:none">
					<i class="fa fa-plus" aria-hidden="true" ></i> Add lecture</button></div>
					<div id="add1">
						<button class="btn-color btn-lg width100 coursecoupons add2">
						<i class="fa fa-plus" aria-hidden="true" ></i> Add section</button>
					</div>
					<div id="addlec" class="addlecture coursecoupons" style="display:none">
							<div class="content ui-state-default">
								<div class="">New Lecture:</div>
								<div class="fx">
									<form class="ng-pristine ng-valid" method="post">

											<div class="manage-fields-wrapper">
												<div id="form-item-title" class="non-labeled ">
													<div id="tooltip-reference-title" class="tooltip-reference form-field ">
														<input id="addlecid" class="lec text-input ch-count-field ud-textinput textinput textInput form-control"  name="title" placeholder="Enter a Title"  type="text" >

													</div>
												</div>
											</div>
										<div class="form-actions">
											<div  class="submit-row">

												<input type="button" class=" btn custom-btn btn-addlec" name="submit"  value="Add lecture">

													<span>or </span>
													<a class="cancel-link yellow">Cancel</a>
											</div>
										</div>
									</form>
								</div>
							</div>

						</div>

<div class="sectionadd" style="display:none">
	<span class="cfi-item-type imgicon">New Section:</span>
		
				
				<div class="manage-fields-wrapper imgicon">
					<div id="form-item-title" class="non-labeled ">
						<div id="tooltip-reference-title" class="tooltip-reference form-field ">
							<input id="id_title" class="form-control sectiontitle" data-max-length="80" data-purpose="chapter-title" data-show-counter="true" maxlength="80" name="title" placeholder="Enter a Title" value="" type="text">
							
						</div>
					</div>
						<div id="form-item-description" class="labeled ">
							<label class="">What will students be able to do at the end of this section?</label>
							<div id="tooltip-reference-description" class="tooltip-reference form-field ">
								<input id="id_description" class="  form-control" data-max-length="200" data-purpose="chapter-objective" data-show-counter="true" maxlength="200" name="description" placeholder="Enter a Learning Objective" value="" type="text">
								
							</div>
						</div>
				</div>
					<div class="form-actions">
						<div class="submit-row imgicon">
							<input class=" btn custom-btn btn-addsec" name="submit" value="Add section" type="button">
							<span>or </span>
							<a class="cancel-link2 yellow">Cancel</a>
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
                      <div class="row textdirection">
                   <div class="form-header">Price</div>
				   <div class="panel-body new-align">
				   <div class="form_container">
				   <div class="pb20"> Select the currency and price of your course below and click ?Save?. Once completed, you will be able to create instructor coupons based on your selected price. To create a Free course, select a price of ?Free? </div>
				   <div class="price-section">
				   <label>Course price</label>
				   <div class="price-drop-down">
				   
				   
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
				
				   </select>
					
					<button class="btn-lg custom-btn " type="button">Save</button>
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
$('.add1').click(function(){
    //$(this).parent().find('#add').css('display','none');
    $(".add1").css('display','none');
	 $(this).parent().next().next().css('display','block');
});
$('.add2').click(function(){
	$('.add2').css('display','none');
	$('.sectionadd').css('display','block');
});
$('.cancel-link2').click(function(){
	$('.add2').css('display','block');
	$('.sectionadd').css('display','none');
});
$('.cancel-link').click(function(){
    //$(this).parent().find('#add').css('display','none');
    $('.add1').css('display','block');
	 $('.addlecture').css('display','none');
});
    
$(document).on('click', '.addcontentbtn', function(){
	 $(this).next('.coll').toggle();
});	

//$(document).on('click', '.videobtn', function(){
//$(this).parents().next('.addvideo').toggle();
//$(this).next().toggle();
//});
//$(document).on('click', '.articlebtn', function(){
//$(this).next().toggle();
//});
//$(document).on('click', '.textsave', function(){
//$( ".saver" ).append($('.textareasave').val());	
//});
  
 
$(document).on('click','.lecedit',function(){
	$(this).siblings('.abc').editable()
});
$(document).on('click','.secedit',function(){
	$(this).siblings('.sec').editable();
});
$(document).on('click','.secdel',function(){
$(this).siblings('.sec').remove();
});
$(document).on('click','.lecdel',function(){
$(this).siblings('.abc').remove();
});
// $(document).ready(function(){
// 	$('.inner').css('display','none');
// 	$('.inner1').css('display','none');
// 	$('.lecid2').css('display','none');
// 	$('.lecturepadding').css('display','none');
// });
$(document).on('click', '.btn-addlec', function() {
	 if ($(".lec").val() == "") {
        return false;
    }
	else
	{
    var y = $('<div class=" inner form-control coursecoupons ">Lecture <span data-order="" class="output">1</span>:<span class="abc curs"></span> <span class="curs lecedit fa fa-pencil"></span> <span class=" curs lecdel fa fa-trash-o "></span>  </span><button type="button" class="f18 section-btn custom-btn fa fa-angle-down addcontentbtn "></button><div id="collapse" class="panel-collapse coll " style="display:none"><div class="panel-body "><label class="coursecoupons">Add description</label><div class="text-direction1 "><div class="add-describe adding-button"><textarea class="adding-button textareasave" rows="6"></textarea></div><div class="addvideo newpadding coursecoupons " ><label>Add lecture video</label><div class="form-group textdirection"><input type="file"  name="img[]" class="file"><div class="input-group col-xs-12"><span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span><input type="text" class="form-control fc input-lg" disabled placeholder="Upload video"><span class="input-group-btn"><button class="browse btn btn-success input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button></span></div></div></div><div class="addvideo newpadding coursecoupons "><label>Add File</label><div class="form-group textdirection"><input class="file" name="img[]" type="file"><div class="input-group col-xs-12"><span class="input-group-addon ui-sortable"><i class="fa fa-file-pdf-o"></i></span><input class="form-control fc input-lg" disabled="" placeholder="Upload file" type="text"><span class="input-group-btn ui-sortable"><button class="browse btn btn-success input-lg" type="button"><i class="glyphicon glyphicon-search"></i>Browse</button></span></div></div></div></div><div class= "section-btn "><button type="button" class="btn-lg btn-success  textsave" >Save</button><button type="button" class="btn-lg btn-warning  textsave" >Cancel</button></div></div></div></div></div>');
//if($(".inner1:last").next().is('.inner')) {
	var a = $('.output:last').html();
    y.insertAfter('.inner:last');
    $('.output:last').html(parseInt(a) + 1);
	
	 
	
//}
//else {    
    y.appendTo('.inner1:last');
//}  
 $( ".abc:last" ).append($('.lec').val());
 $('#addlecid').val("");
// var a = $('.output:last').html();
//alert(a);
 
/*$("span").sortable({
    connectWith: ".con"
}).disableSelection();*/
	}
});
var $ord = $('[data-order]');
          $ord.each(function(){
      var $ordSib = $('.'+ this.className );
      return $(this).text( $ordSib.index(this) +1  );
           });
$(document).on('click', '.btn-addsec', function(){
 if ($(".sectiontitle").val() == "") {
         return false;
    }
	else
	{
var x = $('<div id="sorting" class=" lecid2 con login-button"></div>');
x.appendTo( $( ".lecid" ) );
var x1 = $('<div class="dragdrop"> <span class="in" > Section <span data-order1="" class="output1">1</span>:<span class="sec curs"></span> <span class=" curs secedit fa fa-pencil"></span> <span class=" curs secdel fa fa-trash-o "></span></span></div><div id="sortable" class=" connectedSortable inner1 form-control text p30 coursecoupons custom-btn "></div>');
var b = $('.output1:last').html();
 
//if($('.lecturepadding').css('display') == 'none') {
 x1.insertAfter('.inner1:last');
$('.output1:last').html(parseInt(b) + 1);
    x1.appendTo ( '.lecid2:last' );   
$('.connectedSortable').sortable({
    connectWith: ".connectedSortable",
	 update : function(event, ui) {
		 
          var ord = $('[data-order]');
		  
          ord.each(function(){	 
      var $ordSib = $('.'+ this.className );
      return $(this).text( $ordSib.index(this) +1  );
	 
           });
                        
                    },
});	
$( ".sec:last" ).append($('.sectiontitle').val());
	
$('.add1').css('display','block');
$('#id_title').val("");


	}
	jQuery.fn.swap = function(b){ 
    // method from: http://blog.pengoworks.com/index.cfm/2008/9/24/A-quick-and-dirty-swap-method-for-jQuery
    b = jQuery(b)[0]; 
    var a = this[0]; 
    var t = a.parentNode.insertBefore(document.createTextNode(''), a); 
    b.parentNode.insertBefore(a, b); 
    t.parentNode.insertBefore(b, t); 
    t.parentNode.removeChild(t); 
    return this; 
};


$( ".dragdrop" ).draggable({ revert: true, helper: "clone" });

$( ".dragdrop" ).droppable({
    accept: ".dragdrop",
    activeClass: "ui-state-hover",
    hoverClass: "ui-state-active",
    drop: function( event, ui ) {

        var draggable = ui.draggable, droppable = $(this),
            dragPos = draggable.position(), dropPos = droppable.position();
        
        draggable.css({
            left: dropPos.left+'px',
            top: dropPos.top+'px'
        });

        droppable.css({
            left: dragPos.left+'px',
            top: dragPos.top+'px'
        });
        draggable.swap(droppable);
		setTimeout( function(){ 
    var ord = $('[data-order1]');
		  
          ord.each(function(){	
		  
      var $ordSib = $('.'+ this.className );
      return $(this).text( $ordSib.index(this) +1  );
	 
           });
  }  , 1000 );
		
    }
});


});
 	   
</script>
<script>
$(function()
{
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();
        var controlForm = $('.controls form:first'),
            currentEntry = $('.btn-add').parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);
        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus"></span>');
    }).on('click', '.btn-remove', function(e)
    {
		$(this).parents('.entry:first').remove();
		e.preventDefault();
		return false;
	});
});
</script>

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
