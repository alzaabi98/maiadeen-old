@extends('layouts.master')

@section('head')

	<style>
		body {

			padding-top: 70px;
		}
	</style>

@stop

@section('content')


<div class="row">

	<div class="col-md-3">
		
	</div>


	
	<div class="col-md-6">
	   @if (session()->has('flash_message') )
            <div class="alert alert-success">
                {{session('flash_message')}}    
            </div>
            
    @endif
		<h1 style="color:blue;"> تواصل معنا </h1>
		<hr>
		<form method ="POST" action="/contactemail">
			{{csrf_field()}}
			<div class="form-group">
			  <label for="name">الاسم:</label>
			  <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
			</div>

			<div class="form-group">
			  <label for="email">البريد الالكتروني:</label>
			  <input type="text" name="email" id="email" class="form-control" value="{{old('email')}}">
			</div>
			
			<div class="form-group">
			  <label for="content">الموضوع:</label>
			  <textarea name="content" id="content" class="form-control" rows="5">{{old('content')}}</textarea>
			</div>
			<br>

			<hr>

			  <div class="form-group">			
			  <button type="submit" class="btn btn-primary">الارسال</button>
			</div>
			
			
			
			
			
		</form>

		@if (count($errors))
			<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
			<li>
			{{ $error}}
			</li>
			@endforeach
			</ul>
		@endif

	</div>
</div>

@stop