<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SocialAccountService;
use Socialite;

class SocialAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback(SocialAccountService $service)
    {
        // when facebook call us a with token
        
        $user_facebook = Socialite::driver('facebook')->user();

        $user = $service->createOrGetUser($user_facebook);

      //dd($user);
        auth()->login($user);

        return redirect()->to('/');
    }
}
