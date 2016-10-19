<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    
    public function faq() {
    	
    	return view('pages.faq');
    }
    

    public function quality() {
    	
    	return view('pages.quality');
    }

    public function becomeTeacher() {
    	
    	return view('pages.becomeTeacher');
    }
}
