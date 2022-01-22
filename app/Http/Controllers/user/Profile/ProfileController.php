<?php

namespace App\Http\Controllers\user\Profile;

use App\Http\Controllers\Controller;
use App\Rules\Username;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function index()
    {
        return view('user.profile.index');
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $data = $request->validate(([
            'username' => ['required', 'max:16', new Username(), Rule::unique('users')->ignore($user->id)],
        ]));

        if (! is_null($request->password)){
            $request->validate([
                'password' => ['required', 'min:6', 'max: 16', 'confirmed']
            ]);

            if (Hash::check($request->current_password, $user->password)) {
                $data['password'] = Hash::make($request->password);
                $user->password = $data['password'];
            }else{
                Session::flash('current_password', 'رمز عبور فعلی را اشتباه وارد کرده اید.');
                return redirect(route('profile.index'));
            }

        }
        $user->username = $request->username;
        $user->save();

        Session::flash('success', 'اطلاعات شما با موفقیت به روزرسانی شد.');
        return redirect(route('profile.index'));
    }
}
