<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserForm;
use Illuminate\Support\Facades\DB;

class userformController extends Controller
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
        // $users=DB::select("select * from user_forms");
        // return view('users',['users'=>$users]); 
        // $users = DB::table('user_forms')->get();
        $users =UserForm::all();
        return view('users', ['users' => $users]);
    }

    public function show($id)
    {
        $user = UserForm::find($id);  // 2) use UserForm, not Userform
        if (! $user) {
            return redirect('/users')
                   ->withErrors(['error' => 'User not found']);
        }
        return view('users.show', [      // 3) view in resources/views/users/show.blade.php
            'user' => $user
        ]);
    }

    public function edit($id)
    {
        $user = UserForm::find($id);
        if (! $user) {
            return redirect('/users')
                   ->withErrors(['error' => 'User not found']);
        }
        return view('users.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = UserForm::find($id);
        if (! $user) {
            return redirect('/users')
                   ->withErrors(['error' => 'User not found']);
        }

        $user->update($request->only([
            'username','email','password','skills','gender','age'
        ]));

        return redirect('/users')        // 4) redirect back to list
               ->with('success','User updated successfully!');
    }

    public function destroy($id)
    {
        $user = UserForm::find($id);
        if ($user) {
            $user->delete();
            return redirect('/users')
                   ->with('success','User deleted successfully!');
        }
        return redirect('/users')
               ->withErrors(['error' => 'User not found']);
    }
}



?>