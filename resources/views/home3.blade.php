
@extends('layouts.homelayout')

@section('content')
<div class="row">
			<div class="col-md-12">
				<h3> أشهر الدورات</h3>

			</div>
</div>
<div class="row">
			


	<div class="col-md-12">

		<div class="owl-carousel">
    		<div class="item">

	    		@foreach ($courses as $course)
	    			<img src="{{$course->img}}">

	    		@endforeach

	
    		</div>
   		 </div>

			
	</div> <!-- This is course scroll -->
	
</div>


@endsection
