@extends('layouts.master')

@section('head')

	<style>
		body {

			padding-top: 70px;
		}
	</style>

@stop

@section('content')

<h1> contact us </h1>

<form action="">
	
	<div class="form-group">
	  <label for="name">Name:</label>
	  <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
	</div>

	<div class="form-group">
	  <label for="email">Email:</label>
	  <input type="text" name="email" id="email" class="form-control" value="{{old('email')}}">
	</div>
	
	<div class="form-group">
	  <label for="message">Message:</label>
	  <textarea name="message" id="message" class="form-control" rows="5">
	
		{{old('message')}}
	  </textarea>
	</div>

	<hr>

	  <div class="form-group">			
	  <button type="submit" class="btn btn-primary">Send</button>
	</div>
	
	
	
	
	
</form>

@stop