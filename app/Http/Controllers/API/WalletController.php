<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Wallet;
use Illuminate\Http\Request;
use App\Http\Traits\MessageTrait;

class WalletController extends Controller
{
    use MessageTrait;

    //for get the user wallet

    public function MyWallet()
    {
        $data = Wallet::where('user_id', auth()->user()['user_id'])->first();
        if ($data) {
            return $this->success('Wallet', $data);
        } else {
            return $this->fails();
        }
    }
}
