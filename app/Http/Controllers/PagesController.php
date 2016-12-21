<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Mail;

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
	 public function createcourse() {
      	
    	return view('pages.createcourse');
    }
	public function courseview() {
		
    return view('pages.courseview');

    	//return view('pages.courseview');
    }
    public function mycourse() {
        
    return view('pages.mycourse');

        //return view('pages.courseview');
    }


    public function send(Request $request) {

    	$this->validate($request, [

    		'name' => 'required',
    		'email' => 'required|email',
    		'content' => 'required',

    	]);

   
		

		$senderName = $request->name ;

		$senderEmail = $request->email ;


		


    	$content =  $request->content;
    	//$fromUser =  $request->email;

    	

	  Mail::send('emails.contact',  ['content' => $content], function ($message) use ($senderEmail,$senderName) {
		    
		    $message->from($senderEmail, $senderName);

		    $message->to('alzaabi98@hotmail.com')->subject('question!');;
		});

	  	session()->flash('flash_message',' شكرا على التواصل معنا ');

	  	return back() ;

	    //return response()->json(['message' => 'Request completed']);
    }
    
}
