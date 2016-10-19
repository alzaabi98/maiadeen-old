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

        public function terms() {
    	
    	return view('pages.terms');
    }

        public function privacy() {
    	
    	return view('pages.privacy');
    }

          public function contactus() {
    	
    	return view('pages.contactus');
    }
}
