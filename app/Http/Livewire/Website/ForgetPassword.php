<?php

namespace App\Http\Livewire\Website;

use App\Mail\Code;
use App\Models\ForgetPassword as ModelsForgetPassword;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ForgetPassword extends Component
{
    public $email;
    public $code;
    public $password;
    public $password_confirmation;

    public $status;

    public function boot()
    {
        $this->status = 0;
    }

    public function confirm_email()
    {
        $this->validate([
            'email' => ['required', 'email', 'exists:users,email'],
        ]);
        $user = User::where('email', $this->email)->first();
        if ($user->is_admin != 1 && $user->serial_number == null) {
            $checkpreviousforgetpassword = ModelsForgetPassword::where('email', $user->email)->first();
            if ($checkpreviousforgetpassword) {
                $checkpreviousforgetpassword->delete();
            }
            $ForgetPassword = ModelsForgetPassword::Create([
                'email' => $user->email,
                'code' => rand(111111, 999999),
                'done' => 0,
            ]);
            if ($ForgetPassword) {
                Mail::to($user->email)->locale(app()->getLocale())->send(new Code($ForgetPassword->code));
                session()->flash('emailSent', __('Email Sent Successfully'));
                $this->status = 1;
            } else {
                session()->flash('fail', __('Error Try Again !'));
            }
        } else {
            session()->flash('fail', __('You can not change password for this account'));
        }
    }

    public function confirm_code()
    {
        $this->validate([
            'code' => ['required', 'string']
        ]);
        $data = ModelsForgetPassword::where('email', $this->email)->first();
        if ($data) {
            if ($data->code == $this->code) {
                $data->code = null;
                $data->done = 1;
                $data->save();
                session()->flash('succes_code', __('Code Submitted Successfully'));
                $this->status = 2;
            } else {
                session()->flash('fail', __('Error Try Again !'));
            }
        } else {
            session()->flash('fail', __('You can not change password for this account'));
        }
    }

    public function confirm_pass()
    {
        $this->validate([
            'password' => ['required', 'min:8', 'confirmed']
        ]);
        $data = ModelsForgetPassword::where('email', $this->email)->first();
        if ($data) {
            if ($data->done == 1) {
                $user = User::where('email', $data->email)->first();
                $user->password = Hash::make($this->password);
                $user->save();
                $data->delete();
                $this->status=3;
                return redirect()->route('website.login',app()->getLocale());
            } else {
                session()->flash('fail', __('Error Try Again !'));
            }
        } else {
            session()->flash('fail', __('Error Try Again !'));
        }
    }

    public function render()
    {
        return view('livewire.website.forget-password');
    }
}
