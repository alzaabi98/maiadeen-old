<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Course ;
use App\Category ;


use App\Http\Requests;

class CourseController extends Controller
{
    public function index() {
    	$courses = Course::all();
        //return view('debug',compact('courses'));
        return view('home',compact('courses'));
       //return view('home2')->with('courses', $courses);


    	//dd($projects) ;

    }
    
    public function show(Request $request) {

    	$categories = Category::all() ;
     //    $courses = Course::paginate(5);
    	// return view('courses', compact('categories','courses'));

        if (($category_id = $request->get("category_id") )) {

            $courses = Course::where('category_id',$category_id)->paginate(5);
        }
        else {
            $courses = Course::paginate(5);

        }


        return view('courses',[
            'courses' => $courses ,
            'categories' => $categories ,
        ]);        
    	
    }

}
