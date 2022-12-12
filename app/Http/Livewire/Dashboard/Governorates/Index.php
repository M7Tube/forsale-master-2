<?php

namespace App\Http\Livewire\Dashboard\Governorates;

use Livewire\WithPagination as LivewireWithPagination;
use Livewire\Component;
use App\Http\Traits\LivewireDashboardTrait;
use App\Models\Governorate;

class Index extends Component
{
    use LivewireDashboardTrait;
    use LivewireWithPagination;

    public $governorate_id;
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
            'App\Models\Governorate',
            ['en_name', 'ar_name'],
            'Governorate Created Successfully',
            'Created'
        );
    }

    public function edit($id)
    {
        $this->livewire_edit('governorates', 'App\Models\Governorate', 'governorate_id', $id, ['governorate_id', 'en_name', 'ar_name'], 'WrongGovernorate', 'You Can Not Edit This Governorate');
    }

    public function clear()
    {
        $this->livewire_clear(['governorate_id', 'en_name', 'ar_name']);
    }

    public function update()
    {
        $this->livewire_update(
            [
                'en_name' => ['string', 'max:72'],
                'ar_name' => ['string', 'max:72'],
            ],
            'governorates',
            'App\Models\Governorate',
            $this->governorate_id,
            ['en_name', 'ar_name'],
            'Governorate Updated Successfully',
            'You Can Not Edit This Governorate',
            'Updated'
        );
    }

    public function delete()
    {
        $this->livewire_delete('App\Models\Governorate', 'governorate_id', $this->governorate_id, 'Governorate Deleted Successfully', 'Updated');
    }

    public function render()
    {
        return view(
            'livewire.dashboard.governorates.index',
            [
                'governorates' => Governorate::search($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate(5),
            ]
        );
    }
}
