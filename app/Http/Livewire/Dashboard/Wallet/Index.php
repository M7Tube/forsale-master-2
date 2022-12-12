<?php

namespace App\Http\Livewire\Dashboard\Wallet;

use App\Models\Wallet;
use Livewire\Component;
use Livewire\WithPagination as LivewireWithPagination;

class Index extends Component
{
    use LivewireWithPagination;

    public $wallet_id;
    public $balance;
    public $user_id;

    public $orderBy = 'user_id';
    public $orderAsc = true;
    public $search = '';

    //staticion column
    public $totalPoints;
    public $totalUsers;
    public $totalEmptyUsers;

    public function mount()
    {
        $this->totalPoints = Wallet::sum('balance');
        $this->totalUsers = Wallet::where('balance', '!=', null)->count();
        $this->totalEmptyUsers = Wallet::where('balance', null)->orWhere('balance', 0)->count();
    }

    public function edit($id)
    {
        $wallet = Wallet::where('wallet_id', $id)->first();
        if ($wallet) {
            $this->wallet_id = $wallet->wallet_id;
            $this->balance = $wallet->balance;
            $this->user_id = $wallet->user_id;
        } else {
            return session()->flash('WrongWallet', 'You Can Not Edit This Wallet');
        }
    }
    public function clear()
    {
        $this->wallet_id = null;
        $this->balance = null;
        $this->user_id = null;
    }
    public function update()
    {
        $this->validate([
            'balance' => ['integer'],
        ]);
        $wallet = Wallet::find($this->wallet_id);
        if ($wallet) {
            $wallet->update([
                'balance' => $this->balance,
            ]);
            session()->flash('message', 'Wallet Updated Successfully');
        } else {
            session()->flash('message', 'You Can Not Edit This Wallet');
        }
        $this->emit('WalletUpdated');
    }

    public function render()
    {
        return view(
            'livewire.dashboard.wallet.index',
            [
                'wallets' => Wallet::search($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate(5),
            ]
        );
    }
}
/*
<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\AccountType;
use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination as LivewireWithPagination;
use Livewire\WithFileUploads;

class User extends Component
{
    use LivewireWithPagination;

    public $user_id;
    public $first_name;
    public $last_name;
    public $phone_number;
    public $email;
    public $birth_date;
    public $password;
    public $account_type_id;

    public $accountTypes;

    public $orderBy = 'first_name';
    public $orderAsc = true;
    public $search = '';

    public function mount()
    {
        $this->accountTypes=AccountType::all();
    }

    public function Create()
    {
        $this->validate([
            'first_name' => ['required', 'string', 'max:24'],
            'last_name' => ['required', 'string', 'max:24'],
            'phone_number' => ['required', 'max:10', 'unique:users,phone_number'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'integer','max:99999999'],
            'birth_date' => ['required', 'date'],
            'account_type_id' => ['required', 'numeric', 'in:1,2', 'exists:account_types,account_type_id'],
        ],[
            'phone_number.max'=>'phone number must be like the 0999999999',
            'password.max'=>'password must be 8 number or less'
        ]);
        ModelsUser::Create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'birth_date' => $this->birth_date,
            'password' => Hash::make($this->password),
            'account_type_id' => $this->account_type_id,
        ]);
        session()->flash('message', 'User Created Successfully');
    }

    public function edit($id)
    {
        $user = ModelsUser::where('user_id', $id)->first();
        if ($user) {
            $this->user_id = $user->user_id;
            $this->first_name = $user->first_name;
            $this->last_name = $user->last_name;
            $this->phone_number = $user->phone_number;
            $this->email = $user->email;
            $this->birth_date = $user->birth_date;
            $this->password = null;
            $this->account_type_id = $user->account_type_id;
        } else {
            return session()->flash('WrongUser', 'You Can Not Edit This User');
        }
    }
    public function clear()
    {
        $this->user_id = null;
        $this->first_name = null;
        $this->last_name = null;
        $this->phone_number = null;
        $this->email = null;
        $this->birth_date = null;
        $this->password = null;
        $this->account_type_id = null;
    }
    public function update()
    {
        $this->validate([
            'first_name' => ['string', 'max:24'],
            'last_name' => ['string', 'max:24'],
            // 'phone_number' => 'integer', 'max:10', 'unique:users,phone_number'],
            // 'email' => 'email', 'unique:users,email'],
            'password' => ['nullable','integer','max:99999999'],
            'birth_date' => ['date'],
            // 'account_type_id' => 'numeric', 'in:3', 'exists:account_types,account_type_id'],
        ]);
        $user = ModelsUser::find($this->user_id);
        if ($user) {
            $user->update([
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'password' => Hash::make($this->password),
                'birth_date' => $this->birth_date,
            ]);
            session()->flash('message', 'User Updated Successfully');
        } else {
            session()->flash('message', 'You Can Not Edit This User');
        }
        $this->emit('UserUpdated');
    }

    public function delete()
    {
        ModelsUser::where('user_id', $this->user_id)->delete();
        session()->flash('message', 'User Deleted Successfully');
    }

    public function render()
    {
        return view(
            'livewire.dashboard.user',
            [
                'users' => ModelsUser::search($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate(5),
            ]
        );
    }
}

*/
