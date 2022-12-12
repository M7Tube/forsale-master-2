<?php

namespace App\Http\Livewire\Dashboard\Users;

use App\Models\User;
use Livewire\Component;
use App\Http\Traits\LivewireDashboardTrait;
use Livewire\WithPagination as LivewireWithPagination;


class Index extends Component
{
    use LivewireDashboardTrait;
    use LivewireWithPagination;

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

    // public function Create()
    // {
    //     $this->livewire_create(
    //         [
    //             'en_name' => ['required', 'string', 'max:72'],
    //             'ar_name' => ['required', 'string', 'max:72'],
    //         ],
    //         'App\Models\User',
    //         ['en_name', 'ar_name'],
    //         'User Created Successfully',
    //         'Created'
    //     );
    // }

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

    // public function update()
    // {
    //     $this->livewire_update(
    //         [
    //             'en_name' => ['string', 'max:72'],
    //             'ar_name' => ['string', 'max:72'],
    //         ],
    //         'User',
    //         'App\Models\User',
    //         $this->user_id,
    //         [
    //             'user_id',
    //             'first_name',
    //             'last_name',
    //             'phone_number',
    //             'email',
    //             'is_personal',
    //             'birth_date',
    //         ],
    //         'User Updated Successfully',
    //         'You Can Not Edit This User',
    //         'Updated'
    //     );
    // }

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

    // public function delete()
    // {
    //     $this->livewire_delete('App\Models\User', 'user_id', $this->user_id, 'User Deleted Successfully', 'Updated');
    // }

    public function render()
    {
        return view(
            'livewire.dashboard.users.index',
            [
                'Users' => User::search($this->search)->where('is_admin', 1)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate(5),
            ]
        );
    }
}
