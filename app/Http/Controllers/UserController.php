<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mail;
use App\Mail\UserInvitationMail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('view_user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->role_id = Role::where(['name'=>$request['usertype']])->first()->id;
        $user->password = bcrypt($request->password);
        $user->invitation_token = Str::uuid()->toString();
        $user->employeeid = $request->employeeid;
        $user->contactnumber = $request->contactnumber;
        $user->designation = $request->designation;
        $user->department = $request->department;
        $user->save();

        Mail::to($user->email)->send(new UserInvitationMail($user));

        $notification = array(
            'message' => 'User Added Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('view_user')->with($notification);
    }

    public function accept_invitation($token) {
        $user = User::where(['invitation_token'=>$token])->first();
        $user->active = true;
        $user->save();
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('edit_user',  compact('user'));
    }
    /**
    * public function edit2(User $user)
    * {
    *   return view('user_profile',  compact('user'));
    *
    *   }
    */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user){
        $user->email = $request->email;
        $user->name = $request->name;
        $user->role_id = Role::where(['name'=>$request['usertype']])->first()->id;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('view_user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user){
        User::destroy($user->id);
        $notification = array(
            'message' => 'User Removed Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('view_user')->with($notification);
    }
}
