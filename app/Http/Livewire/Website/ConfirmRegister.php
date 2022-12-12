<?php

namespace App\Http\Livewire\Website;

use App\Models\User;
use Livewire\Component;

class ConfirmRegister extends Component
{
    public $code;
    public $user_id;

    public function mount()
    {
        if (session()->get('WebLoggedIn', [])) {
            abort(403);
        }
        $this->user_id = request()->query('user_id');
    }

    public function updatedCode()
    {
        $this->validate([
            'code' => ['required', 'integer'],
        ]);
    }

    public function confirm()
    {
        $this->validate([
            'code' => ['required', 'integer'],
        ]);
        $user = User::find($this->user_id);
        if (!$user || $user->serial_number == null) {
            session()->flash('fail', __('The User Is Not Found'));
        } else {
            if ($user->serial_number == $this->code) {
                // $token = $user->createToken('LoginToken')->plainTextToken;
                $data = ['user' => $user->only('user_id')];
                session()->put('WebLoggedIn', $user->only('user_id'));
                $user->serial_number = null;
                $user->save();
                session()->flash('success', __('Done !'));
                return redirect()->route('website.homepage', app()->getLocale());
                // return compact('user', 'token');
            } else {
                session()->flash('fail', __('Wrong Code'));
            }
        }
    }

    public function clear()
    {
        $this->code = null;
    }

    public function render()
    {
        return view('livewire.website.confirm-register');
    }
}
