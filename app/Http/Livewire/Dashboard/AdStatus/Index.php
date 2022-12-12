<?php

namespace App\Http\Livewire\Dashboard\AdStatus;

use App\Http\Traits\LivewireDashboardTrait;
use App\Models\AdStatus;
use Livewire\WithPagination as LivewireWithPagination;
use Livewire\Component;

class Index extends Component
{
    use LivewireWithPagination;
    use LivewireDashboardTrait;
    public $ad_statuse_id;
    public $en_name;
    public $ar_name;

    public $orderBy = 'en_name';
    public $orderAsc = true;
    public $search = '';

    public function Create()
    {
        $this->livewire_create(
            [
                'en_name' => ['required', 'string', 'max:72'],
                'ar_name' => ['required', 'string', 'max:72'],
            ],
            'App\Models\AdStatus',
            ['en_name', 'ar_name'],
            'Ad Status Created Successfully',
            'Created'
        );
    }

    public function edit($id)
    {
        $this->livewire_edit('AS', 'App\Models\AdStatus', 'ad_statuse_id', $id, ['ad_statuse_id', 'en_name', 'ar_name'], 'WrongAdStatus', 'You Can Not Edit This Ad Status');
    }
    public function clear()
    {
        $this->livewire_clear(['ad_statuse_id', 'en_name', 'ar_name']);
    }
    public function update()
    {
        $this->livewire_update(
            [
                'en_name' => ['string', 'max:72'],
                'ar_name' => ['string', 'max:72'],
            ],
            'AS',
            'App\Models\AdStatus',
            $this->ad_statuse_id,
            ['en_name', 'ar_name'],
            'Ad Status Updated Successfully',
            'You Can Not Edit This Ad Status',
            'Updated'
        );
    }

    public function delete()
    {
        $this->livewire_delete('App\Models\AdStatus', 'ad_statuse_id', $this->ad_statuse_id, 'Ad Status Deleted Successfully', 'Updated');
    }
    public function render()
    {
        return view('livewire.dashboard.ad-status.index',
        [
            'AS' => AdStatus::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate(5),
        ]
    );
    }
}
