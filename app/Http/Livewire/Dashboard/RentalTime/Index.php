<?php

namespace App\Http\Livewire\Dashboard\RentalTime;

use App\Models\RentalTime;
use Livewire\Component;
use Livewire\WithPagination as LivewireWithPagination;
use Livewire\WithFileUploads;
use App\Http\Traits\LivewireDashboardTrait;

class Index extends Component
{
    use LivewireDashboardTrait;
    use LivewireWithPagination;

    public $rental_time_id;
    public $en_rent_name;
    public $ar_rent_name;

    public $orderBy = 'en_rent_name';
    public $orderAsc = true;
    public $search = '';

    public function Create()
    {
        $this->livewire_create(
            [
                'en_rent_name' => ['required', 'string', 'max:72'],
                'ar_rent_name' => ['required', 'string', 'max:72'],
            ],
            'App\Models\RentalTime',
            ['en_rent_name', 'ar_rent_name'],
            'Rental Time Created Successfully',
            'RentalTimeCreated'
        );
    }

    public function edit($id)
    {
        $this->livewire_edit('RM', 'App\Models\RentalTime', 'rental_time_id', $id, ['rental_time_id', 'en_rent_name', 'ar_rent_name'], 'WrongRentalTime', 'You Can Not Edit This Rental Time');
    }
    public function clear()
    {
        $this->livewire_clear(['rental_time_id', 'en_rent_name', 'ar_rent_name']);
    }
    public function update()
    {
        $this->livewire_update(
            [
                'en_rent_name' => ['string', 'max:72'],
                'ar_rent_name' => ['string', 'max:72'],
            ],
            'RM',
            'App\Models\RentalTime',
            $this->rental_time_id,
            ['en_rent_name', 'ar_rent_name'],
            'Rental Time Updated Successfully',
            'You Can Not Edit This Rental Time',
            'RentalTimeUpdated'
        );
    }

    public function delete()
    {
        $this->livewire_delete('App\Models\RentalTime', 'rental_time_id', $this->rental_time_id, 'Rental Time Deleted Successfully', 'RentalTimeUpdated');
    }

    public function render()
    {
        return view(
            'livewire.dashboard.rental-time.index',
            [
                'RM' => RentalTime::search($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate(5),
            ]
        );
    }
}
