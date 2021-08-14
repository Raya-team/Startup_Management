<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Responsibility;
use App\Models\Team;
use App\Models\TeamMember;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
//    protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectToAdmin = RouteServiceProvider::ADMIN;
    protected $redirectToUser = RouteServiceProvider::USER;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
//        return Validator::make($data, [
//            'name' => ['required', 'string', 'max:255'],
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'password' => ['required', 'string', 'min:8', 'confirmed'],
//        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function showRegistrationForm()
    {
        $product_types = ProductType::all(['id','nickname']);
        $activities = Activity::all(['id','nickname']);
        $responsibilities = Responsibility::all(['id','nickname']);
        return view('auth.register', compact(['product_types','activities','responsibilities']));
    }

    public function register(Request $request, Team $team, User $user, Product $product, TeamMember $member)
    {
        return $request;
        $this->Team($request, $team);
        $this->User($request, $team, $user);
        $member->fname = $request->fname;
        $member->lname = $request->lname;
        $member->team_id = $team->id;
        $member->education = $request->education;
        return 'done';
    }

    /**
     * @param Request $request
     * @param Team $team
     */
    protected function Team(Request $request, Team $team)
    {
        $team->name = $request->team_name;
        $team->project_name = $request->project_name;
        $team->status = $request->status;
        $team->activity_id = $request->activity_field;
        $team->email = $request->team_email;
        $team->address = $request->address;
        $team->phone_number = $request->team_phone;
        $team->save();
    }

    /**
     * @param Request $request
     * @param Team $team
     * @param User $user
     */
    protected function User(Request $request, Team $team, User $user)
    {
        $user->username = $request->username;
        $user->email = $request->email;
        $user->level = 0;
        $user->team_id = $team->id;
        $user->password = Hash::make($request->password);
        $user->updated_at = null;
        $user->save();
    }

//    protected function create(Request $request)
//    {
//        return $request;
//    }
}
