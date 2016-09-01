@extends('layouts.narrowheader')


@section('content')
 

 
 <div class="row">
 	<div class="col-md-12 ">
      <input type="text" class="form-control" placeholder="Search for...">

 	</div>
 </div>
<div class="row">
	
	<div class="col-md-9">
		@foreach($courses as $course)
		<div class="panel panel-default ">
			<div class="panel-body">
			    <img src="{{$course->img}}" width="200" height="200">
			 </div>
			 <div class="course-title">
			 	{{$course->title}}
			 </div>
		</div>
		@endforeach
	

	</div>


	<div class="col-md-3">
		
	    <div class="list-group">
		    <?php $selected_category = Request::get("category_id")   ?> 
		    {{$selected_category}}

		    <a href="#" class="list-group-item ">كل الدورات <span class="badge">{{ App\Course::all()->count()}}</span></a>
		    @foreach ($categories as $category)
		    	<a href="{{route('course-browse',['category_id' => $category->id ])}}" class="list-group-item ">{{$category->name}} <span class="badge">{{$category->subcategories->count()}}</span></a>
		    @endforeach

	  </div>

	</div>

</div>

<div class="row">
	<div class="col-md-12">
		<span style="align-content: center;">{{ $courses->links() }}</span>

	</div>
</div>

@endsection


