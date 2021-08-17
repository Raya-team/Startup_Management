<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Education;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Responsibility;
use App\Models\Team;
use App\Models\TeamMember;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Rules\Persian;
use App\Rules\Phone;
use App\Rules\Security;
use App\Rules\Username;
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
        return Validator::make($data, [
            'username' => ['required', 'unique:users', 'max:16', new Username()],
            'email' => ['required','email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'max:16', 'confirmed'],
            'password_confirmation' => ['required_with:password', 'same:password'],
            'team_name' => ['required', 'min:3', 'max:32', 'unique:teams', new Persian()],
            'project_name' => ['required', 'min:3', 'max:32', new Security()],
            'team_email' =>  ['required', 'email', 'max:255', 'unique:teams'],
            //?
            'team_phone' => ['unique:teams',new Phone(),'digits:11','numeric'],
            'activity_field' => ['required', new Security()],
            'status' => ['required', new Security()],
            'address' => ['max:255', 'alpha_dash'],
            'fname' => ['required', 'min:3', 'max:16', new Persian()],
            'lname' => ['required', 'min:3', 'max:16', new Persian()],
            'major' => ['required', 'max:32', new Persian()],
            'age' => ['required', new Security()],
            //?
            'responsibility[]' => ['required', new Security()],
            'education' => ['required', new Security()],
            //?
            'resume' => ['required','max:16', new Username()],
            //?
            'investment' => ['required','numeric'],
        ]);

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
        $education = Education::all(['id', 'nickname']);
        return view('auth.register', compact(['product_types', 'activities', 'responsibilities', 'education']));
    }

    public function register(Request $request, Team $team, User $user, TeamMember $member, Responsibility $responsibility)
    {
        $this->Team($request, $team);
        $this->User($request, $team, $user);
        $this->Member($request, $team, $member);
        $this->ResponsibilityMember($request, $member);
        $this->Products($request, $team);
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

    /**
     * @param Request $request
     * @param Team $team
     * @param TeamMember $member
     */
    protected function Member(Request $request, Team $team, TeamMember $member)
    {
        $member->fname = $request->fname;
        $member->lname = $request->lname;
        $member->team_id = $team->id;
        $member->education_id = $request->education;
        $member->major = $request->major;
        $member->age = $request->age;
        $member->resume = $request->resume;
        $member->investment = $request->investment;
        $member->updated_at = null;
        $member->save();
    }

    /**
     * @param Request $request
     * @param TeamMember $member
     */
    protected function ResponsibilityMember(Request $request, TeamMember $member)
    {
        $member->responsibilities()->sync($request->responsibility);
    }

    /**
     * @param Request $request
     * @param Team $team
     */
    protected function Products(Request $request, Team $team)
    {
        $products = collect($request->product);
        for ($i = 0; $i < sizeof($products); $i++) {
            $product = new Product();
            $product->name = $products[$i]['product_name'];
            $product->team_id = $team->id;
            $product->type_id = $products[$i]['product_type'];
            $product->updated_at = null;
            $product->save();
        }
    }

//    protected function create(Request $request)
//    {
//        return $request;
//    }
}
