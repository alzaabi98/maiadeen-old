@extends('layouts.homelayout')

@section('content')


@foreach ($courses as $course)


	<h1>{{$course->title}} </h1>

@endforeach

@endsection