<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
//    protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectToAdmin = RouteServiceProvider::ADMIN;
    protected $redirectToUser = RouteServiceProvider::USER;
    protected function rules()
    {

        return [
            'token' => 'required',
            'email' => 'required|email',
//            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password' => ['required', 'confirmed', 'min:6'],
        ];
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
}
