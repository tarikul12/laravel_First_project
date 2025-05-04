<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    //
    // function addUser(Request $request)
    // {
        
    //     // echo $request->username;
    //     // echo "<br>";
    //     // echo $request->email;
    //     // echo "<br>";
    //     // echo $request->password;
    //     // echo "<br>";
    //     // echo $request->skills;
    //     // echo "<br>";
    //     // echo $request->gender;
    //     // echo "<br>";
    //     // echo $request->age;

    //     $validation = $request->validate([
    //         'username' => 'required',
    //         'email' => 'required|email',
    //         'password' => 'required|min:5|max:12',
    //         'skills' => 'required',],
    //     [
    //         'username.required' => 'Please enter your name',
    //         'email.required' => 'Please enter your email',
    //         'password.required' => 'Please enter your password',
    //         'skills.required' => 'Please select at least one skill',
    //     ]);

    //     $user = new UserForm();
    //     $user->username = $request->username;
    //     $user->email = $request->email;
    //     $user->password = $request->password;
    //     $user->skills =  $request->skills;
    //     $user->user_id = $request->user_id;
    //     $user->save();

    //     return redirect()->route('form')->with('success', 'User added successfully!');


    //     // return view('user-form', ['name' => $request->name, 'email' => $request->email, 'password' => $request->password]);
    // }

    function getUserInfo($name)
    {
        return "Hello, $name";
    }

    function getUserInfo2()
    {
        $name ="Tarikul";
        $user =["Tarikul","Islam", "Hurray"];
        return view('home',["names" =>$name,"users" => $user]);
    }


    function users()
    {
        $users=DB::select("select * from users");
        return view('users',['users'=>$users]);
    }
}