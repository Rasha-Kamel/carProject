<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()            //select or show all users
    {
        $users = User::get();
        return view ('admin.users',compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()            //to open addUser blade only to add new user
    {
        return view ('admin.addUser'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)      //to save insert userdata
    {
        $new_user = new user();
        $new_user->name = $request->fullname;
        // $new_user->user_name = $request->username;
        $new_user->email = $request->email;
        $new_user->password = $request->password;
        // $new_user->active = $request->active;
        $new_user->save();
    
        return redirect('/admin/allusers');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)                  //to open edituser bladw with selecte id and data for this id
    {
        $user = User::findOrFail($id);
        return view ('admin.editUser',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse     //to save update user data
    {
        User::where('id',$id)->update([
            'name'=> $request->fullname,
            // 'username'=> $request->username,
            'email' =>$request->email,
            // 'active'=> $request->active,
            'password'=>$request->password,
        ]);

        // $user = User::findOrFail($id);
        // $user->name = $request->fullname;
        // $user->save();
        return redirect('/admin/allusers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}