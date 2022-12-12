<?php

namespace App\Http\Livewire\Dashboard\SpcialAd;

use Livewire\Component;
use Livewire\WithPagination as LivewireWithPagination;
use App\Http\Traits\LivewireDashboardTrait;
use App\Models\SpcialAd;

class Index extends Component
{
    use LivewireDashboardTrait;
    use LivewireWithPagination;
    public $spcial_ad_id;
    public $en_title;
    public $ar_title;
    public $en_desc;
    public $ar_desc;
    public $is_golden;
    public $picture;
    public $user_id;

    public $orderBy = 'is_golden';
    public $orderAsc = true;
    public $search = '';

    public function edit($id)
    {
        $this->livewire_edit('SA', 'App\Models\SpcialAd', 'spcial_ad_id', $id, ['spcial_ad_id', 'en_title', 'ar_title', 'en_desc', 'ar_desc', 'is_golden', 'picture', 'user_id'], 'WrongSpcialAd', 'You Can Not Edit This Spcial Ad');
    }
    public function clear()
    {
        $this->livewire_clear(['spcial_ad_id', 'en_title', 'ar_title', 'en_desc', 'ar_desc', 'is_golden', 'picture', 'user_id']);
    }

    // public function delete($id)
    // {
    //     $this->livewire_delete('App\Models\SpcialAd', 'spcial_ad_id', $id, 'Spcial Ad Deleted Successfully', 'Deleted');
    // }

    public function makeGolden($id)
    {
        $ad = SpcialAd::find($id);
        if ($ad) {
            if ($ad->is_golden != 1) {
                SpcialAd::where('is_golden', 1)->update(['is_golden' => 2]);
                $ad->is_golden = 1;
                $ad->save();
            }
        }
    }

    public function render()
    {
        return view(
            'livewire.dashboard.spcial-ad.index',
            [
                'SA' => SpcialAd::search($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate(5),
            ]
        );
    }
}
