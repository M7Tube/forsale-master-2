<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Http\Traits\PermissionsTrait;
use Spatie\Permission\Models\Permission;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Register extends Component
{
    use PermissionsTrait;
    use AuthorizesRequests;

    public $first_name;
    public $last_name;
    public $email;
    public $phone_number;
    public $password;
    public $birth_date;
    public $password_confirmation;
    public $permission = [];
    public $allPermissions;

    public $select_all = false;

    public function __construct()
    {
        $this->authorize(['permission:create_users']);
    }

    public function updatedSelectAll($value)
    {
        if ($value) {
            foreach ($this->getPermissions() as $data) {
                array_push($this->permission, 'create_' . $data);
                array_push($this->permission, 'edit_' . $data);
                array_push($this->permission, 'read_' . $data);
                array_push($this->permission, 'delete_' . $data);
            }
        } else {
            $this->permission = [];
        }
    }
    public function mount()
    {
        $this->allPermissions = $this->getPermissions();
    }

    public function updatedFirstName()
    {
        $this->validate([
            'first_name' => ['required', 'string', 'max:48'],
            'last_name' => ['required', 'string', 'max:48'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone_number' => ['required', 'integer', 'unique:users,phone_number'],
            'password' => ['required', 'min:8', 'confirmed'],
            'permission' => ['required', 'min:1'],
        ]);
    }

    public function updatedLastName()
    {
        $this->validate([
            'first_name' => ['required', 'string', 'max:48'],
            'last_name' => ['required', 'string', 'max:48'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone_number' => ['required', 'integer', 'unique:users,phone_number'],
            'password' => ['required', 'min:8', 'confirmed'],
            'permission' => ['required', 'min:1'],
        ]);
    }

    public function updatedEmail()
    {
        $this->validate([
            'first_name' => ['required', 'string', 'max:48'],
            'last_name' => ['required', 'string', 'max:48'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone_number' => ['required', 'integer', 'unique:users,phone_number'],
            'password' => ['required', 'min:8', 'confirmed'],
            'permission' => ['required', 'min:1'],
        ]);
    }

    public function updatedPhoneNumber()
    {
        $this->validate([
            'first_name' => ['required', 'string', 'max:48'],
            'last_name' => ['required', 'string', 'max:48'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone_number' => ['required', 'integer', 'unique:users,phone_number'],
            'password' => ['required', 'min:8', 'confirmed'],
            'permission' => ['required', 'min:1'],
        ]);
    }

    public function updatedIsPersonal()
    {
        $this->validate([
            'first_name' => ['required', 'string', 'max:48'],
            'last_name' => ['required', 'string', 'max:48'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone_number' => ['required', 'integer', 'unique:users,phone_number'],
            'password' => ['required', 'min:8', 'confirmed'],
            'permission' => ['required', 'min:1'],
        ]);
    }

    public function updatedPassword()
    {
        $this->validate([
            'first_name' => ['required', 'string', 'max:48'],
            'last_name' => ['required', 'string', 'max:48'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone_number' => ['required', 'integer', 'unique:users,phone_number'],
            'password' => ['required', 'min:8', 'confirmed'],
            'permission' => ['required', 'min:1'],
        ]);
    }

    public function updatedPasswordConfirmation()
    {
        $this->validate([
            'first_name' => ['required', 'string', 'max:48'],
            'last_name' => ['required', 'string', 'max:48'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone_number' => ['required', 'integer', 'unique:users,phone_number'],
            'password' => ['required', 'min:8', 'confirmed'],
            'permission' => ['required', 'min:1'],
        ]);
    }

    public function updatedPermission()
    {
        $this->validate([
            'first_name' => ['required', 'string', 'max:48'],
            'last_name' => ['required', 'string', 'max:48'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone_number' => ['required', 'integer', 'unique:users,phone_number'],
            'password' => ['required', 'min:8', 'confirmed'],
            'permission' => ['required', 'min:1'],
        ]);
    }

    public function create()
    {
        $this->validate([
            'first_name' => ['required', 'string', 'max:48'],
            'last_name' => ['required', 'string', 'max:48'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone_number' => ['required', 'integer', 'unique:users,phone_number'],
            'password' => ['required', 'min:8', 'confirmed'],
            'permission' => ['required', 'min:1'],
        ]);
        $user = User::Create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'password' => Hash::make($this->password),
            'birth_date' => $this->birth_date,
            'is_admin' => 1,
        ]);
        $user->syncPermissions($this->permission);
        session()->flash('success', 'User Created Successfully');
        $this->clear();
        return redirect()->route('web.crud.dashboard', app()->getLocale());
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
        $this->permission = null;
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
