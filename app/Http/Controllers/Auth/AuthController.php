<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Mail;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        //Session::flash('message', 'Please confirm you email address !!'); 


    }
    // add by abdulaziz 
    // to oover register methid.. so user will not login
    public function register(Request $request)
    {
        $validator = $this->validator($request->all());
        $input = $request->all();

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $user = $this->create($input)->toArray();
        //Auth::guard($this->getGuard())->login($this->create($request->all()));
        //$user = $this->create($request->all());
        \Session::flash('message', 'Please confirm your email !!');

        Mail::send('auth.emails.activation', $user, function($message) use ($user) {
                //$message->to($user['email']);
                //$message->subject('Site - Activation Code');
                $message->to($user['email'])->subject('Maiadeen - Activation Code!');

            });

        //return redirect($this->redirectPath());
        return redirect()->back();
    }


      
      public function confirmEmail($token) {

        $user = User::whereToken($token)->firstOrFail()->confirmEmail();


        \Session::flash('message', 'You are now confirmed , please login ');
        return redirect('login');

          
      }
      
}
