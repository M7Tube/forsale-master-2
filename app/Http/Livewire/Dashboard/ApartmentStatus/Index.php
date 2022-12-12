<?php

namespace App\Http\Livewire\Dashboard\ApartmentStatus;

use App\Http\Traits\LivewireDashboardTrait;
use App\Models\ApartmentStatus;
use Livewire\Component;
use Livewire\WithPagination as LivewireWithPagination;

class Index extends Component
{
    use LivewireWithPagination;
    use LivewireDashboardTrait;
    public $apartment_status_id;
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
            'App\Models\ApartmentStatus',
            ['en_name', 'ar_name'],
            'Apartment Status Created Successfully',
            'Created'
        );
    }

    public function edit($id)
    {
        $this->livewire_edit('AS', 'App\Models\ApartmentStatus', 'apartment_status_id', $id, ['apartment_status_id', 'en_name', 'ar_name'], 'WrongApartmentStatus', 'You Can Not Edit This Apartment Status');
    }
    public function clear()
    {
        $this->livewire_clear(['apartment_status_id', 'en_name', 'ar_name']);
    }
    public function update()
    {
        $this->livewire_update(
            [
                'en_name' => ['string', 'max:72'],
                'ar_name' => ['string', 'max:72'],
            ],
            'AS',
            'App\Models\ApartmentStatus',
            $this->apartment_status_id,
            ['en_name', 'ar_name'],
            'Apartment Status Updated Successfully',
            'You Can Not Edit This Apartment Status',
            'Updated'
        );
    }

    public function delete()
    {
        $this->livewire_delete('App\Models\ApartmentStatus', 'apartment_status_id', $this->apartment_status_id, 'Apartment Status Deleted Successfully', 'Updated');
    }

    public function render()
    {
        return view(
            'livewire.dashboard.apartment-status.index',
            [
                'AS' => ApartmentStatus::search($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate(5),
            ]
        );
    }
}
