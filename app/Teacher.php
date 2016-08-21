<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
	// each teacher can have many courses.
    public function courses() {
    	
    	return $this->hasMany('App\Course');
    }
}
