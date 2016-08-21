<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course ;

use App\Http\Requests;

class CourseController extends Controller
{
    public function index() {
    	$courses = Course::paginate(6);
        return view('home',compact('courses'));


    	//dd($projects) ;

    }
    	

}
