<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>main layout</title>

    <!-- Bootstrap -->
    
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/custom-narrow.css">

	<!-- Important Owl stylesheet -->
	<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
 
	<!-- Default Theme -->
	<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
 	<!-- font awasome-->
 	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="assets/js/jquery.min.js" ></script> 
	@yield('header')
  </head>
  <body>

  	<div class="navbar navbar-default navbar-fixed-top">
  		<div class="nav-white"> 
	  		<div class="container-fluid">
	  			<div class="navbar-header">
	  				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#example" aria-expanded="false">
			        		<span class="sr-only">Toggle navigation</span>
			        		<span class="icon-bar"></span>
			        		<span class="icon-bar"></span>
			        		<span class="icon-bar"></span>
		      		</button>
	  				<a class="navbar-brand pull-right" href="#">
	  					<h3>ميادين</h3>
	  				</a>
	  			</div>
	  			<ul class="nav navbar-nav collapse navbar-collapse pull-right" id="example">
	  				 <li><a href="#">تواصل معنا</a></li>
	  				 <li><a href="#">الاسئلة المتكررة</a></li>
	  				 <li><a href="#">الدورات</a></li>
	  				 <li><a href="#">المحاضرون</a></li>
	  				

	  				 <button class="btn btn-info navbar-btn">
	  				 	<span class="glyphicon glyphicon-user">
	  				 		Become Teacher
	  				 	</span>

	  				 </button>
	  				 <div class=" navbar-header dropdown">
						  <button class="btn btn-default dropdown-toggle navbar-btn logged-dropdown" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						    Logged in
						    <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						    <li><a href="#">User Profile</a></li>
						    <li><a href="#">Teacher</a></li>
						 
						  </ul>
					</div>
	  			</ul>
	  		</div>
  		</div>
  	</div>
  	<header>
  	
  		<div class="jumbotron">
  			
  			
	  			
				
  			
  		</div>

  	</header>
    <div class="container">
		

			@yield('content')
	

	<footer>
		<div class="container-fluid">
			<div class="navbar navbar-default ">
			
				<p class="text-center">&copy; 2016 - Maiadeen </p>	
				<div class="social-icons">	
					<a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
					<a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
					<a href="#"><i class="fa fa-instagram fa-2x"></i></a>

				</div>

				
			</div>
			
			
				
			
						
		</div>
	</footer>


		@yield('header')

    <script>
	$(document).ready(function() {
 
		$("#owl-demo").owlCarousel({
 
			//autoPlay: 3000, //Set AutoPlay to 3 seconds

			items : 4,
			//itemsDesktop : [1199,3],
			//itemsDesktopSmall : [979,3]
 
 		 });

		$("#owl-demo2").owlCarousel({
 
			//autoPlay: 3000, //Set AutoPlay to 3 seconds

			items : 4,
			//itemsDesktop : [1199,3],
			//itemsDesktopSmall : [979,3]
 
 		 });


		/*$('.link').on('click', function(event){
		    var $this = $(this);
		    if($this.hasClass('clicked')){
		      $this.removeAttr('style').removeClass('clicked');
		    } else{
		      $this.css('background','#55a4ab').addClass('clicked');
		    }
		  }); */

 
		});

	</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Include js plugin -->
	

	<!--  jQuery 1.7+  -->
    <script src="assets/owl-carousel/owl.carousel.js" ></script>

	
  </body>
</html>

