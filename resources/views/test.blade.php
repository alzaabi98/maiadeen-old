@extends('layouts.homelayout')

@section('content')

<div class="row">
  
  <div class="col-md-12">
    <ul class="nav nav-pills nav-stacked pull-right">
     @foreach ($categories as $category)
     
    
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{$category->name}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">

            <?php $subs = $category->subcategories ; ?>
            @foreach ($subs as $sub)
              <li><a href="#">{{$sub->name}}</a></li>
              
              
            @endforeach
            </ul>
          </li>
        
    
    @endforeach

</ul>
  </div>
</div>

 

 @endsection