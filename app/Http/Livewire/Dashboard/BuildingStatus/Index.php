<?php

namespace App\Http\Livewire\Dashboard\BuildingStatus;

use App\Http\Traits\LivewireDashboardTrait;
use App\Models\BuildingStatus;
use Livewire\Component;use Livewire\WithPagination as LivewireWithPagination;


class Index extends Component
{
    use LivewireDashboardTrait;
    use LivewireWithPagination;

    public $building_statuse_id;
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
            'App\Models\BuildingStatus',
            ['en_name', 'ar_name'],
            'Building Status Created Successfully',
            'Created'
        );
    }

    public function edit($id)
    {
        $this->livewire_edit('BS', 'App\Models\BuildingStatus', 'building_statuse_id', $id, ['building_statuse_id', 'en_name', 'ar_name'], 'WrongBuildingStatus', 'You Can Not Edit This Building Status');
    }
    public function clear()
    {
        $this->livewire_clear(['building_statuse_id', 'en_name', 'ar_name']);
    }
    public function update()
    {
        $this->livewire_update(
            [
                'en_name' => ['string', 'max:72'],
                'ar_name' => ['string', 'max:72'],
            ],
            'AS',
            'App\Models\BuildingStatus',
            $this->building_statuse_id,
            ['en_name', 'ar_name'],
            'Building Status Updated Successfully',
            'You Can Not Edit This Building Status',
            'Updated'
        );
    }

    public function delete()
    {
        $this->livewire_delete('App\Models\BuildingStatus', 'building_statuse_id', $this->building_statuse_id, 'Building Status Deleted Successfully', 'Updated');
    }

    public function render()
    {
        return view(
            'livewire.dashboard.building-status.index',
            [
                'BS' => BuildingStatus::search($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate(5),
            ]
        );
    }
}
