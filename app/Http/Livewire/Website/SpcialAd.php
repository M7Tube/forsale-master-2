<?php

namespace App\Http\Livewire\Website;

use App\Models\SpcialAd as ModelsSpcialAd;
use Livewire\Component;

class SpcialAd extends Component
{
    public function render()
    {
        return view('livewire.website.spcial-ad', [
            'ad' => ModelsSpcialAd::where('spcial_ad_id', request()->query('id'))->get()
        ]);
    }
}
