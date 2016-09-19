<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname', 'email', 'password','social','verified',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

      public function courses() {
        
        return $this->hasMany('App\Course');
    }
    // events 
    public static function boot() {
        parent::boot();
        static::creating(function($user) {
            $user->token = str_random(30);

        });
    }


    public function confirmEmail() {

        $this->verified = true;
        $this->token = null;
        $this->save();  
        
    }
    
}
