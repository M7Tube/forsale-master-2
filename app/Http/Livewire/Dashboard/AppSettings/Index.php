<?php

namespace App\Http\Livewire\Dashboard\AppSettings;

use App\Models\AppSettings;
use App\Models\Terms;
use Livewire\Component;

class Index extends Component
{
    public $en_terms;
    public $ar_terms;
    public $manger_accept;
    public $defualt_golden_ad_price;
    public $defualt_normal_ad_price;
    public $defualt_golden_ad_count;
    public $defualt_normal_ad_count;
    public $wallet_defualt_balance;
    public $instagram;
    public $facebook;
    public $twitter;
    public $email;
    public $phone_number;
    public $fax;

    public function mount()
    {
        $terms = Terms::all()->first();
        $settings = AppSettings::all()->first();
        $this->ar_terms = $terms->ar_terms_conditions;
        $this->en_terms = $terms->en_terms_conditions;
        $this->manger_accept = $settings->defualt_manger_accept;
        $this->defualt_golden_ad_price = $settings->defualt_golden_ad_price;
        $this->defualt_normal_ad_price = $settings->defualt_normal_ad_price;
        $this->defualt_golden_ad_count = $settings->defualt_golden_ad_count;
        $this->defualt_normal_ad_count = $settings->defualt_normal_ad_count;
        $this->wallet_defualt_balance = $settings->wallet_defualt_balance;
        $this->instagram = $settings->instagram;
        $this->facebook = $settings->facebook;
        $this->twitter = $settings->twitter;
        $this->email = $settings->email;
        $this->phone_number = $settings->phone_number;
        $this->fax = $settings->fax;
    }
    public function edit()
    {
        $terms = Terms::all()->first();
        $settings = AppSettings::all()->first();
        $terms->ar_terms_conditions = $this->ar_terms ?? 'empty';
        $terms->en_terms_conditions = $this->en_terms ?? 'empty';
        $settings->defualt_manger_accept = $this->manger_accept ?? 1;
        $settings->defualt_golden_ad_price = $this->defualt_golden_ad_price ?? 5000;
        $settings->defualt_normal_ad_price = $this->defualt_normal_ad_price ?? 1000;
        $settings->defualt_golden_ad_count = $this->defualt_golden_ad_count ?? 1;
        $settings->defualt_normal_ad_count = $this->defualt_normal_ad_count ?? 5;
        $settings->wallet_defualt_balance = $this->wallet_defualt_balance ?? 5000;
        $settings->instagram = $this->instagram ?? 'empty';
        $settings->facebook = $this->facebook ?? 'empty';
        $settings->twitter = $this->twitter ?? 'empty';
        $settings->email = $this->email ?? 'empty';
        $settings->phone_number = $this->phone_number ?? 'empty';
        $settings->fax = $this->fax ?? 'empty';
        $terms->save();
        $settings->save();
    }
    public function render()
    {
        return view('livewire.dashboard.app-settings.index');
    }
}
