@extends('layouts.master')


@section('content')
 
@section('header')
<div class="custom-header">
	
</div> 
@endsection
 
 <div class="row">
 	<div class="col-md-12 ">
      <input type="text" class="form-control" placeholder="Search for...">

 	</div>
 </div>
<div class="row">
	
	<div class="col-md-3">
		
	  <div class="list-group">
		    <?php $selected_category = Request::get("category_id")   ?> 
		    

		    <a href="{{route('course-browse')}}" class="list-group-item ">كل الدورات <span class="badge">{{ App\Course::all()->count()}}</span></a>
		    @foreach ($categories as $category)
		    	<a href="{{route('course-browse',['category_id' => $category->id ])}}" class="list-group-item ">{{$category->name}} <span class="badge">{{App\Course::where('category_id',$category->id)->count()}}</span></a>
		    @endforeach
	</div>



	</div>
	
	<div class="col-md-9">
		@foreach($courses as $course)
				
		
				<a href="">
					
					<div class="panel panel-default panel-small">
						<div class="panel-body">
							<img src="{{$course->img}}">
							<hr>
							<div class="course-title">
				           		{{ $course->title }}
				          	</div>
				          	<hr>
				          	<div class="course-summary">
				           		{{$course->summary}}
				          	</div>

				          	<div class="price">
				            	$20
				          </div>
					         <div class="stars">
					          <span>★</span>
					          <span>★</span>
					          <span>★</span>
					          <span class="start-grey">★</span>
					          <span class="start-grey">★</span>

					        </div>


	
						</div>
					</div>
				</a>
				

		@endforeach

	

	</div>



</div>

<div class="row">
	<div class="col-md-12">
		<span style="align-content: center;">{{ $courses->links() }}</span>

	</div>
</div>

@endsection

