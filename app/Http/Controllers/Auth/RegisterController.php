<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Activity;
use App\Models\Education;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Responsibility;
use App\Models\Team;
use App\Models\TeamMember;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Rules\Landline;
use App\Rules\Security;
use App\Rules\Username;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

//    protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectToAdmin = RouteServiceProvider::ADMIN;
    protected $redirectToUser = RouteServiceProvider::USER;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        $this_year = jdate(Carbon::now())->format('Y');
        $product_types = ProductType::all(['id','nickname']);
        $activities = Activity::all(['id','nickname']);
        $responsibilities = Responsibility::all(['id','nickname']);
        $education = Education::all(['id', 'nickname']);
        return view('auth.register', compact(['product_types', 'activities', 'responsibilities', 'education', 'this_year']));
    }

    public function register(RegisterRequest $request , Team $team, User $user, TeamMember $member)
    {
        $this->ValidationNotRequired($request);
        $this->Team($request, $team);
        $this->User($request, $team, $user);
        $this->Member($request, $team, $member);
        $this->ResponsibilityMember($request, $member);
        $this->Products($request, $team);
        $this->guard()->login($user);
        return redirect('login');
    }
    
    protected function Team(RegisterRequest $request, Team $team)
    {
        $team->name = $request->input('team_name');
        $team->project_name = $request->input('project_name');
        $team->status = $request->input('status');
        $team->activity_id = $request->input('activity_field');
        $team->email = $request->input('team_email');
        $team->address = $request->input('address');
        $team->phone_number = $request->input('team_phone');
        $team->landline = $request->input('land_line');
        $team->save();
    }

    protected function User(RegisterRequest $request, Team $team, User $user)
    {
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->level = 0;
        $user->team_id = $team->id;
        $user->password = Hash::make($request->input('password'));
        $user->updated_at = null;
        $user->save();
    }

    protected function Member(RegisterRequest $request, Team $team, TeamMember $member)
    {
        $member->fname = $request->input('fname');
        $member->lname = $request->input('lname');
        $member->team_id = $team->id;
        $member->education_id = $request->input('education');
        $member->major = $request->input('major');
        $member->age = $request->input('age');
        $member->resume = $request->input('resume');
        $member->investment = $request->input('investment');
        $member->updated_at = null;
        $member->save();
    }

    protected function ResponsibilityMember(RegisterRequest $request, TeamMember $member)
    {
        $member->responsibility()->sync($request->responsibility);
    }

    protected function Products(RegisterRequest $request, Team $team)
    {
        $products = collect($request->product);
        for ($i = 0; $i < sizeof($products); $i++) {
            if(!isset($products[$i]['product_name']) || !isset($products[$i]['product_type'])){continue;}
            if($products[$i]['product_name'] == null || $products[$i]['product_type'] == null){continue;}
            $product = new Product();
            $product->name = $products[$i]['product_name'];
            $product->team_id = $team->id;
            $product->type_id = $products[$i]['product_type'];
            $product->updated_at = null;
            $product->save();
        }
    }

    protected function ValidationNotRequired(RegisterRequest $request)
    {
        if ($request->input('land_line')) {
            $request->validate([
                'land_line' => ['unique:teams,landline', 'digits:11', 'numeric', new Landline()],
            ]);
        }
        if ($request->input('address')) {
            $request->validate([
                'address' => ['max:255', new Security()],
            ]);
        }
    }

//use:ثبت نام هم زمان دو کاربر
    public function unique(Request $request)
    {
        switch ($request->type){
            case 'email' :
                $emails = User::where('email', $request->email)->first();
                if($emails) {$isAvailable  = false;}else{$isAvailable = true;}
                break;
            case 'team_name' :
                $team_name = Team::where('name', $request->team_name)->first();
                if($team_name) {$isAvailable  = false;}else{$isAvailable = true;}
                break;
            case 'team_email' :
                $team_email = Team::where('email', $request->team_email)->first();
                if($team_email) {$isAvailable  = false;}else{$isAvailable = true;}
                break;
            case 'team_phone' :
                $team_phone = Team::where('email', $request->team_phone)->first();
                if($team_phone) {$isAvailable  = false;}else{$isAvailable = true;}
                break;
            case 'land_line' :
                $land_line = Team::where('landline', $request->land_line)->first();
                if($land_line) {$isAvailable  = false;}else{$isAvailable = true;}
                break;
            case 'username' :
            default:
                $users = User::where('username', $request->username)->first();
                if($users) {$isAvailable  = false;}else{$isAvailable = true;}
                break;
        }

        if ($isAvailable){
            echo json_encode(array(
                'valid' => $isAvailable,
            ));
        } else {
            echo json_encode(array(
                'valid' => $isAvailable,
            ));
        }
    }
}
