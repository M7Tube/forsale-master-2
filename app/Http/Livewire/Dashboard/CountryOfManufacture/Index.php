<?php

namespace App\Http\Livewire\Dashboard\CountryOfManufacture;

use App\Models\CountryOfManufacture;
use Livewire\Component;
use Livewire\WithPagination as LivewireWithPagination;
use App\Http\Traits\LivewireDashboardTrait;
use Livewire\WithFileUploads;

class Index extends Component
{
    use LivewireDashboardTrait;
    use LivewireWithPagination;

    public $cof_id;
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
            'App\Models\CountryOfManufacture',
            ['en_name', 'ar_name'],
            'Country Of Manufacture Created Successfully',
            'Created'
        );
    }

    public function edit($id)
    {
        $this->livewire_edit('COM', 'App\Models\CountryOfManufacture', 'cof_id', $id, ['cof_id', 'en_name', 'ar_name'], 'WrongCountryOfManufacture', 'You Can Not Edit This Country Of Manufacture');
    }
    public function clear()
    {
        $this->livewire_clear(['cof_id', 'en_name', 'ar_name']);
    }
    public function update()
    {
        $this->livewire_update(
            [
                'en_name' => ['string', 'max:72'],
                'ar_name' => ['string', 'max:72'],
            ],
            'COM',
            'App\Models\CountryOfManufacture',
            $this->cof_id,
            ['en_name', 'ar_name'],
            'Country Of Manufacture Updated Successfully',
            'You Can Not Edit This Country Of Manufacture',
            'Updated'
        );
    }

    public function delete()
    {
        $this->livewire_delete('App\Models\CountryOfManufacture', 'cof_id', $this->cof_id, 'Country Of Manufacture Deleted Successfully', 'Updated');
    }

    public function render()
    {
        return view(
            'livewire.dashboard.country-of-manufacture.index',
            [
                'COM' => CountryOfManufacture::search($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate(5),
            ]
        );
    }
}
