
<!DOCTYPE html>
<html>
<head>
  <title>Slick Playground</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
  <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" >
  <link rel="stylesheet" href="assets/css/custom.css" >

  <script src="assets/js/bootstrap.min.js" ></script>
  
  <link href="https://fonts.googleapis.com/css?family=Mirza:700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css">

  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>


  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  
@yield('head') 
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
              <h3>Projects Nice</h3>
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

@yield('header') 
    
<div class="container">

@yield('content') 


  
 <footer>
    <div class="container-fliud">
      <div class="navbar navbar-default navbar-fixed-bottom">
      
        
        <div class="social-icons">  
          <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
          <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
          <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
         

        </div>
        <div>
           <p class="text-center footer-text">&copy; 2016 - Projects Nice</p>  
        </div>

        
      </div>
      
      
            
    </div>
 </footer>

</div>
  <script src="assets/slick/slick.js" type="text/javascript" charset="utf-8"></script>

@yield('javascript') 
    

</body>
</html>