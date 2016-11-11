
<!DOCTYPE html5>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Maiadeen Homepage</title>

  <link rel="stylesheet" href="/assets/css/bootstrap.min.css" >
  <link rel="stylesheet" href="/assets/css/bootstrap-theme.min.css" >
  
  <link rel="stylesheet" type="text/css" href="/assets/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="/assets/slick/slick-theme.css">
<!--  this is for footer  -->
  <link rel="stylesheet" href="/assets/css/footer-distributed.css">

  <link rel="stylesheet" href="/assets/css/custom.css" >
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

  <script src="/assets/js/bootstrap.min.js" ></script>
  
  <link href="https://fonts.googleapis.com/css?family=Mirza:700" rel="stylesheet">




  <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">

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
            <a class="navbar-brand " href="/">
              <h3>ميادين</h3>
            </a>
          </div>
          <ul class="nav navbar-nav collapse navbar-collapse pull-right" id="example">
             <li><a href="/contactus">تواصل معنا</a></li>
             <li><a href="/faq">الاسئلة المتكررة</a></li>
             <li><a href="#">الدورات</a></li>
             <li><a href="/contactus">المحاضرون</a></li>
            


             @if (Auth::guest())
          
                <a href="{{ url('/login') }}" class="btn btn-warning navbar-btn">Login</a>
                <a href="{{ url('/register') }}" class="btn btn-success navbar-btn">Register</a>
                @else
                    <button class="btn btn-info navbar-btn">
                      <span class="glyphicon glyphicon-user">
                        Become Teacher
                      </span>

                   </button>
                     <div class=" navbar-header dropdown">
                          <button class="btn btn-default dropdown-toggle navbar-btn logged-dropdown" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                             {{Auth::user()->firstname}}
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">User Profile</a></li>
                            <li><a href="#">Teacher</a></li>
                            <li><a href="{{url('/logout')}}">Logout</a></li>
                         
                          </ul>
                        </div>
                @endif
          </ul>
        </div>
      </div>
    </div>

@yield('header') 
    
<div class="m-t">

@yield('content') 


  </div>
    <footer class="footer-distributed">

      <div class="footer-right">

        <a href="https://www.facebook.com/maiadeen"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/maiadeen"><i class="fa fa-twitter"></i></a>
        <a href="https://www.instagram.com/maiadeen"><i class="fa fa-instagram"></i></a>
        

      </div>

      <div class="footer-left">

        <p class="footer-links">
          <a href="/terms">الشروط والأحكام</a>
          ·
          <a href="/privacy">سياسة الخصوصية</a>
          ·
          <a href="/contactus">تواصل معنا</a>
          ·
          <a href="#">من نحن؟</a>
          ·
        
        </p>

        <p> ميادين &copy; 2016</p>
      </div>

    </footer>



@yield('javascript') 
    

</body>
</html>