<?php

namespace App\Http\Livewire\Dashboard\CarStatus;

use App\Http\Traits\LivewireDashboardTrait;
use App\Models\CarStatus;
use Livewire\Component;
use Livewire\WithPagination as LivewireWithPagination;

class Index extends Component
{
    use LivewireWithPagination;

    use LivewireDashboardTrait;
    public $car_status_id;
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
            'App\Models\CarStatus',
            ['en_name', 'ar_name'],
            'Car Status Created Successfully',
            'Created'
        );
    }

    public function edit($id)
    {
        $this->livewire_edit('BS', 'App\Models\CarStatus', 'car_status_id', $id, ['car_status_id', 'en_name', 'ar_name'], 'WrongCarStatus', 'You Can Not Edit This Car Status');
    }
    public function clear()
    {
        $this->livewire_clear(['car_status_id', 'en_name', 'ar_name']);
    }
    public function update()
    {
        $this->livewire_update(
            [
                'en_name' => ['string', 'max:72'],
                'ar_name' => ['string', 'max:72'],
            ],
            'AS',
            'App\Models\CarStatus',
            $this->car_status_id,
            ['en_name', 'ar_name'],
            'Car Status Updated Successfully',
            'You Can Not Edit This Car Status',
            'Updated'
        );
    }

    public function delete()
    {
        $this->livewire_delete('App\Models\CarStatus', 'car_status_id', $this->car_status_id, 'Car Status Deleted Successfully', 'Updated');
    }

    public function render()
    {
        return view(
            'livewire.dashboard.car-status.index',
            [
                'CS' => CarStatus::search($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate(5),
            ]
        );
    }
}
