<?php

namespace App\Http\Livewire\Website;

use App\Models\MainCategory;
use App\Models\SpcialAd;
use Livewire\Component;

class HomePage extends Component
{
    public $data;

    public function mount()
    {
        //for spcified the top ad(admin) in the home page that need to be fixed and stady...then spcifed the moving one
    }

    public function render()
    {
        return view('livewire.website.home-page',[
            'SpcialAd' => SpcialAd::select('spcial_ad_id','picture')->where('is_golden', 1)->first(),
            'SpcialAdNG' => SpcialAd::select('spcial_ad_id','picture','ar_title','en_title','ar_desc','en_desc','picture')->latest('spcial_ad_id')->where('is_golden', '!=', 1)->get()->take(5),
        ]);
    }
}
