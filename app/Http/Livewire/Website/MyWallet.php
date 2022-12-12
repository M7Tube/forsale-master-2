<?php

namespace App\Http\Livewire\Website;

use App\Models\Wallet;
use Livewire\Component;

class MyWallet extends Component
{
    public $user_id;
    public function boot()
    {
        if (!session()->get('WebLoggedIn', [])) {
            abort(403);
        }
        $this->user_id = session()->get('WebLoggedIn', [])['user_id'];
    }

    public function render()
    {
        return view('livewire.website.my-wallet', [
            'wallets' => Wallet::where('user_id', $this->user_id)->first(),
        ]);
    }
}
