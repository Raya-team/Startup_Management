<?php

namespace App\Http\Controllers\user\TeamMember;

use App\Http\Controllers\Controller;
use App\Http\Requests\KeyEmployeeRequest;
use App\Models\Education;
use App\Models\KeyEmployee;
use App\Models\Responsibility;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeyEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.team-member.key-employees.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.team-member.key-employees.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param KeyEmployeeRequest $request
     * @param KeyEmployee $keyEmployee
     * @return \Illuminate\Http\Response
     */
    public function store(KeyEmployeeRequest $request, KeyEmployee $member)
    {
        $member->fname = $request->input('fname');
        $member->lname = $request->input('lname');
        $member->team_id = Auth::user()->team_id;
        $member->education_id = $request->input('education_id');
        $member->major = $request->input('major');
        $member->age = $request->input('age');
        $member->resume = $request->input('resume');
        $member->updated_at = null;
        $member->save();
        $member->responsibility()->sync($request->input('responsibility'));
        return response(['سهامدار مورد نظر با موفقیت ایجاد شد'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('user.team-member.key-employees.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KeyEmployeeRequest $request, $id)
    {
        $member = KeyEmployee::findorfail($request->id);
        $member->fname = $request->input('fname');
        $member->lname = $request->input('lname');
        $member->team_id = Auth::user()->team_id;
        $member->education_id = $request->input('education_id');
        $member->major = $request->input('major');
        $member->age = $request->input('age');
        $member->resume = $request->input('resume');
        $member->save();
        $member->responsibility()->sync($request->input('responsibility'));
        return response(['سهامدار مورد نظر با موفقیت ویرایش شد'], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
