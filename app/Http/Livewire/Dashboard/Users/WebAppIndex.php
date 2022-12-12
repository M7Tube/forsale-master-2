<?php

namespace App\Http\Livewire\Dashboard\Users;

use Livewire\Component;
use App\Http\Traits\LivewireDashboardTrait;
use App\Models\User;
use Livewire\WithPagination as LivewireWithPagination;

class WebAppIndex extends Component
{
    use LivewireDashboardTrait;
    use LivewireWithPagination;
    protected $paginationTheme = 'bootstrap';

    public $user_id;
    public $first_name;
    public $last_name;
    public $phone_number;
    public $email;
    public $is_personal;
    public $birth_date;

    public $orderBy = 'first_name';
    public $orderAsc = true;
    public $search = '';

    public function edit($id)
    {
        $this->livewire_edit('User', 'App\Models\User', 'user_id', $id, [
            'user_id',
            'first_name',
            'last_name',
            'phone_number',
            'email',
            'is_personal',
            'birth_date',
        ], 'WrongUser', 'You Can Not Edit This User');
    }

    public function clear()
    {
        $this->livewire_clear([
            'user_id',
            'first_name',
            'last_name',
            'phone_number',
            'email',
            'is_personal',
            'birth_date',
        ]);
    }


    public function disable($id)
    {
        $user = User::find($id);
        if ($user) {
            if ($user->is_admin != 1 || $user->hasRole('Super-Admin') == 0) {
                $user->is_active = 0;
                $user->save();
            }
        }
    }

    public function active($id)
    {
        $user = User::find($id);
        if ($user) {
            if ($user->is_admin != 1 || $user->hasRole('Super-Admin') == 0) {
                $user->is_active = 1;
                $user->save();
            }
        }
    }

    public function render()
    {
        return view(
            'livewire.dashboard.users.web-app-index',
            [
                'Users' => User::search($this->search)->where([['is_admin', 0],['is_personal', 0]])
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->paginate(5),
            ]
        );
    }
}
