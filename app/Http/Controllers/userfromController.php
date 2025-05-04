<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserForm;
use Illuminate\Support\Facades\DB;

class userfromController extends Controller
{
    function addUser(Request $request)
    {
        
        // echo $request->username;
        // echo "<br>";
        // echo $request->email;
        // echo "<br>";
        // echo $request->password;
        // echo "<br>";
        // echo $request->skills;
        // echo "<br>";
        // echo $request->gender;
        // echo "<br>";
        // echo $request->age;

        $validation = $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
            'skills' => 'required',],
        [
            'username.required' => 'Please enter your name',
            'email.required' => 'Please enter your email',
            'password.required' => 'Please enter your password',
            'skills.required' => 'Please select at least one skill',
        ]);

        if (UserForm::where('email', $request->email)->exists()) {
            return redirect()->back()->withErrors(['email' => 'Email already exists'])->withInput();
        }

        $user_forms = new UserForm();
        $user_forms->username = $request->username;
        $user_forms->email = $request->email;
        $user_forms->password = $request->password;
        $user_forms->skills =  $request->skills;
        $user_forms->gender = $request->gender;
        $user_forms->age = $request->age;
        $user_forms->save();

        return  view('user-form')
            ->with('success', 'User added successfully!');


        // return view('user-form', ['name' => $request->name, 'email' => $request->email, 'password' => $request->password]);
    }

    function users()
    {
        $users=DB::select("select * from user_forms");
        return view('users',['users'=>$users]);
    }
}
