<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequset;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'], //, 'unique:users,email'
            'password' => ['required'],
        ]);
        $user = User::where('email', $request->email)->first();
        if ($user) {
            //the user is found
            if (Hash::check($request->password, $user->password)) {
                //the password is correct
                //give him a session with his info
                $request->session()->put('LoggedAccount', $user);
                return redirect()->route('web.crud.dashboard');
            } else {
                //the password is incorrect
                //return him back
                return back()->with('fail', 'the password is incorrect');
            }
        } else {
            //the user is missing
            return back()->with('fail', 'the email is incorrect');
        }
    }

    public function register(Request $request)
    {
        // $user = User::Create([
        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'pic' => $request->pic,
        //     'department_id' => $request->department_id,
        //     'role_id' => $request->role_id,
        // ]);
        // if ($user) {
        //     return back()->with('success', 'The User Has been added successfuly');
        // } else {
        //     return back()->with('fail', 'Somthing Wrong is Happening');
        // }
    }

    public function logout()
    {
        if (session()->has('LoggedAccount')) {
            session()->pull('LoggedAccount');
            return redirect()->route('login.view');
        } else {
            return redirect()->route('login.view');
        }
    }
}
