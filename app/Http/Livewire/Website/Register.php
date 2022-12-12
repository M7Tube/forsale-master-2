<?php

namespace App\Http\Livewire\Website;

use App\Mail\Code;
use App\Models\AdType;
use App\Models\AppSettings;
use App\Models\User;
use App\Models\Wallet;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Register extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $phone_number;
    public $password;
    public $birth_date;
    public $is_personal;
    public $password_confirmation;

    public function mount()
    {
        if (session()->get('WebLoggedIn', [])) {
            abort(403);
        }
        $this->is_personal = 0;
        $this->birth_date = Carbon::now();
    }

    public function updatedFirstName()
    {
        $this->validate([
            'first_name' => ['required', 'string', 'max:48'],
        ]);
    }

    public function updatedEmail()
    {
        $this->validate([
            'email' => ['required_without:phone_number', 'email', 'unique:users,email'],
        ]);
    }

    public function updatedPhoneNumber()
    {
        $this->validate([
            'phone_number' => ['nullable', 'unique:users,phone_number'],
        ]);
    }

    public function updatedIsPersonal()
    {
        $this->validate([
            'is_personal' => ['required', 'in:0,1'],
        ]);
    }

    public function updatedPassword()
    {
        $this->validate([
            'password' => ['required', 'min:8', 'confirmed'],
        ]);
    }

    public function updatedPasswordConfirmation()
    {
        $this->validate([
            'password' => ['required', 'min:8', 'confirmed'],
        ]);
    }

    public function create()
    {
        $this->validate([
            'first_name' => ['required', 'string', 'max:48'],
            'phone_number' => ['nullable', 'unique:users,phone_number'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8', 'confirmed'],
            'is_personal' => ['required', 'in:0,1'],
            'birth_date' => ['date'],

        ]);
        $Code = rand(111111, 999999);
        $user = User::Create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name ?? null,
            'email' => $this->email,
            'serial_number' => $Code,
            'phone_number' => $this->phone_number ?? null,
            'password' => Hash::make($this->password),
            'birth_date' => $this->birth_date ?? null,
            'is_personal' => $this->is_personal,
            // 'is_admin' => 0,
        ]);
        if ($user) {
            $defualt_balance = AppSettings::all('wallet_defualt_balance')->first();
            $wallet = Wallet::Create([
                'balance' => $defualt_balance->wallet_defualt_balance,
                'user_id' => $user->user_id
            ]);
            AdType::Create(['en_name' => 'Normal Ad', 'ar_name' => 'أعلان عادي', 'count' => 50, 'is_spcial' => 0, 'user_id' => $user->user_id]);
            AdType::Create(['en_name' => 'Spcial Ad', 'ar_name' => 'أعلان مميز', 'count' => 50, 'is_spcial' => 1, 'user_id' => $user->user_id]);
            if ($wallet) {
                session()->flash('success', 'User Created Successfully');
            } else {
                session()->flash('fails', 'There Is something Wrong');
            }
        } else {
            session()->flash('fails', 'There Is something Wrong');
        }
        Mail::to($user->email)->send(new Code($user->serial_number));
        session()->flash('success', 'User Created Successfully');
        $this->clear();
        return redirect()->route('website.confirm-register', ['user_id' => $user->user_id, app()->getLocale()]);
    }

    public function clear()
    {
        $this->first_name = null;
        $this->last_name = null;
        $this->email = null;
        $this->phone_number = null;
        $this->password = null;
        $this->password_confirmation = null;
        $this->birth_date = null;
        $this->is_personal = 1;
    }

    public function render()
    {
        return view('livewire.website.register');
    }
}
