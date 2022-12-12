<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function NonLivewirelogin(Request $request)
    {
        // $request->validate([
        //     'email_phone' => ['required'],
        //     'password' => ['required'],
        // ]);
        // if ($request->email_phone) {
        //     // Check User If He Exict
        //     $user = User::where('email', $request->email_phone)->orWhere('phone_number', $request->email_phone)->first();
        //     if (!$user || $user->is_personal == null) {
        //         return back()->with('fail', 'This User Is not Found');
        //     } else {
        //         if (!Hash::check($request->password, $user->password)) {
        //             return back()->with('fail', 'Wrong Password');
        //         } else if (is_null($user->serial_number)) {
        //             $data = ['user' => $user->only('user_id')];
        //             // $token = $user->createToken('LoginToken')->plainTextToken;
        //             $WebLoggedIn = session()->get('WebLoggedIn', []);
        //             if ($WebLoggedIn) {
        //                 session()->forget('WebLoggedIn');
        //                 session()->put('WebLoggedIn', $user->only('user_id'));
        //             } else {
        //                 session()->put('WebLoggedIn', $user->only('user_id'));
        //             }
        //             // return session()->get('WebLoggedIn', []);

        //             // session()->put('WebLoggedIn', $WebLoggedIn);
        //             return redirect()->route('website.homepage', app()->getLocale());
        //         } else {
        //             return back()->with('fail', 'The Account Is Not Active Yet');
        //         }
        //     }
        // }
    }

    public function logout()
    {
        Session()->flush();
        return redirect()->route('website.homepage', app()->getLocale());
    }
}
