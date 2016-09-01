
@extends('layouts.homelayout')

@section('content')
<div class="row">
			<div class="col-md-12">
				<h3> أشهر الدورات</h3>

			</div>
</div>
<div class="row">
			

	<div class="col-md-12">
		<div id="owl-demo" class="owl-carousel" >
			@foreach ($courses as $course)
			<?php //$teacher = DB::table('users')->where('id', '=', $course->teacher_id)->first();
				  $teacher = DB::table('users')->where('id', $course->teacher_id)->first();	
			?>
			<a  class="item link">
			
				<div class="thumbnail">
					<img src="{{$course->img}}">
					<div class="caption">
					<?php $title = str_limit($course->title, 30)?>
					{{$title}}							
					</div>
					<hr>
					<div class="priceText">
						{{'$' . $course->price}}
					</div>

					<hr>
					<div class="teacherNameText">
						{{$teacher->firstname . ' ' . $teacher->lastname}}
					</div>
					<div class="buttons">
						<button type="button" class="btn btn-warning">More</button>
					</div>

				</div>
			</a>
			@endforeach

		</div>

			
	</div> <!-- This is course scroll -->
</div>

<div class="row">
			<div class="col-md-12">
				<h3> أشهر المحاضرون</h3>

			</div>
</div>

<div class="col-md-12">
		<div id="owl-demo2" class="owl-carousel" >
			<?php $teacher_ids = DB::table('courses')->distinct()->get(['teacher_id']); ?>
			@foreach ($teacher_ids as $record)
			<?php $teacher = DB::table('users')->where('id', '=', $record->teacher_id)->first();?>
			<a  class="item link">
			
				<div class="thumbnail">
					<img src="{{$teacher->avator}}">
					<div class="caption">
						{{ $teacher->firstname . ' ' . $teacher->lastname }}
											
					</div>
					<hr>
					<div class="priceText">
						ratings.. 
					</div>

					<hr>
					
					<div class="buttons">
						<button type="button" class="btn btn-warning">More</button>
					</div>

				</div>
			</a>
			@endforeach
		</div>
	</div>

@endsection
