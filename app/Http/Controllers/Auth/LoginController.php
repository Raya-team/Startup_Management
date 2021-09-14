<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectToAdmin = RouteServiceProvider::ADMIN;
    protected $redirectToUser = RouteServiceProvider::USER;
//    protected $redirectTo = RouteServiceProvider::HOME;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }
        if (Auth::user()->level){
            return property_exists($this, 'redirectToAdmin') ? $this->redirectToAdmin : '/admin/dashboard';

        }else{
            return property_exists($this, 'redirectToUser') ? $this->redirectToUser : '/user/dashboard';
        }
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string|email',
            'password' => 'required|string',
        ]);
    }

    public function auth_check()
    {
        return 'true';
//        $user = Auth::user();
//        if ($user){
//            return 'is login';
//        }else{
//            return 'logout';
//        }
//        return Auth::check();
    }
}
