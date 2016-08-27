<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course ;

use App\Http\Requests;

class CourseController extends Controller
{
    public function index() {
    	$courses = Course::all();
        return view('home2',compact('courses'));


    	//dd($projects) ;

    }
    	

}
