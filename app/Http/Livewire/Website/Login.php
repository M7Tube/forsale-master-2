<?php

namespace App\Http\Livewire\Website;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $email_phone;
    public $password;

    public $message;


    public function mount()
    {
        if (session()->get('WebLoggedIn', [])) {
            abort(403);
        }
    }
    // public function updatedEmailPhone()
    // {
    //     $this->validate([
    //         'email_phone' => ['required'],
    //         'password' => ['required'],
    //     ]);
    // }

    // public function updatedPassword()
    // {
    //     $this->validate([
    //         'email_phone' => ['required'],
    //         'password' => ['required'],
    //     ]);
    // }

    public function login()
    {
        $this->validate([
            'email_phone' => ['required'],
            'password' => ['required'],
        ]);
        if ($this->email_phone) {
            // Check User If He Exict
            $user = User::where('email', $this->email_phone)->orWhere('phone_number', $this->email_phone)->first();
            if (!$user || $user->is_admin == 1) {
                return back()->with('fail', 'This User Is not Found');
            } else {
                if (!Hash::check($this->password, $user->password)) {
                    return back()->with('fail', 'Wrong Password');
                } else if (is_null($user->serial_number)) {
                    $data = ['user' => $user->only('user_id')];
                    // $token = $user->createToken('LoginToken')->plainTextToken;
                    $WebLoggedIn = session()->get('WebLoggedIn', []);
                    if ($WebLoggedIn) {
                        session()->forget('WebLoggedIn');
                        session()->put('WebLoggedIn', $user->only('user_id'));
                    } else {
                        session()->put('WebLoggedIn', $user->only('user_id'));
                    }
                    // return session()->get('WebLoggedIn', []);

                    // session()->put('WebLoggedIn', $WebLoggedIn);
                    return redirect()->route('website.homepage', app()->getLocale());
                } else {
                    return back()->with('fail', 'The Account Is Not Active Yet');
                }
            }
        }
    }

    public function clear()
    {
        $this->email_phone = null;
        $this->password = null;
    }
    
    public function render()
    {
        return view('livewire.website.login');
    }

}
