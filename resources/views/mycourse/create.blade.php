@extends('layouts.master')
@section('head')

    <link href="/assets/pages/css/style.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="/assets/pages/css/animations.css" type="text/css"> -->

@stop

@section('content')
<?php 
if(isset($_POST['submit'])) {
echo $_GET["email"];
}
?>
    <div class="mystyle">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="mypanel fa fa-book "> Create New Course </div>
                    <div class="panel-body myborder">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/mycourse', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('mycourse.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
	</div>
@endsection