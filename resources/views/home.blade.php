

@extends('layouts.master')

@section('header')
	<header>
    
      <div class="jumbotron">
        
        <div class="col-sm-2 col-md-offset-4">
          <img  src="assets/img/logo.png" alt="logo" width="150" height="150">
        </div>
        <div class="col-md-4">
          <h1 style="margin-right:30px; margin-top:20px; ">
           ميادين العلم
           </h1>
           <h5>
          لا حدود للعلم والمعرفة 
          ميادين هو المحطة الموثوقة لجميع ما تطمح لتعلمه
          رؤية معاصرة  للتعلم في أي مكان وأي وقت 
        </h5>
        <a href="courses" class="btn btn-warning btn-lg" role="button">جميع الدورات</a>


        
        </div>
      </div>

    </header>
@endsection
@section('content')

<div class="row">
  <div class="col-md-12">
    <h3> أشهر الدورات</h3>

  </div>
</div>
<div class="row">
  

  <div class="col-md-12">
    <section class="responsive slider">
    	@foreach ($courses as $course)
	    <a href="">
	        <div>
	          <img src="{{$course->img}}">
	        </div>
	        <div class="course-title">
	            {{$course->title}}
	          </div>
	          <div class="course-summary">
	          <?php $summary = str_limit($course->summary, 40)?>
	           {{$summary}}
	          </div>
	          <div class="price">
	            {{$course->price}}
	          </div>
	         <div class="stars">
	          <span>★</span>
	          <span>★</span>
	          <span>★</span>
	          <span class="start-grey">★</span>
	          <span class="start-grey">★</span>

	        </div>
	    </a>

 		@endforeach

    
  	</section>

  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h3> أشهر المحاضرين</h3>

  </div>
</div>
<div class="row">
  

  <div class="col-md-12">
    
    <section class="responsive slider">


 
  </section>

  </div>
</div>

@endsection

@section('javascript')
  <script src="assets/slick/slick.js" type="text/javascript" charset="utf-8"></script>

	  <script type="text/javascript">
	    $(document).on('ready', function() {
	      $('.responsive').slick({
	  dots: true,
	  infinite: false,
	  speed: 300,
	  slidesToShow: 4,
	  slidesToScroll: 4,
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
	});
	      
	    });
	  </script>


 
@endsection

{{--App\Course::find($course->id)->teacher->name--}}