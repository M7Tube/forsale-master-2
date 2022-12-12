<?php

namespace App\Http\Livewire\Dashboard\Area;

use App\Models\Area;
use App\Models\Governorate;
use Livewire\WithPagination as LivewireWithPagination;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Http\Traits\LivewireDashboardTrait;

class Index extends Component
{
    use LivewireWithPagination;
    use LivewireDashboardTrait;
    public $area_id;
    public $en_name;
    public $ar_name;
    public $governorate_id;

    public $governorate;

    public $orderBy = 'en_name';
    public $orderAsc = true;
    public $search = '';

    public function Create()
    {
        $this->livewire_create(
            [
                'en_name' => ['required', 'string', 'max:72'],
                'ar_name' => ['required', 'string', 'max:72'],
                'governorate_id' => ['required', 'integer', 'exists:governorates,governorate_id'],
            ],
            'App\Models\Area',
            ['en_name', 'ar_name', 'governorate_id'],
            'Area Created Successfully',
            'Created'
        );
    }

    public function edit($id)
    {
        $this->livewire_edit('areas', 'App\Models\Area', 'area_id', $id, ['area_id', 'en_name', 'ar_name', 'governorate_id'], 'WrongArea', 'You Can Not Edit This Area');
    }
    public function clear()
    {
        $this->livewire_clear(['area_id', 'en_name', 'ar_name', 'governorate_id']);
    }
    public function update()
    {
        $this->livewire_update(
            [
                'en_name' => ['string', 'max:72'],
                'ar_name' => ['string', 'max:72'],
                'governorate_id' => ['integer', 'exists:governorates,governorate_id'],
            ],
            'areas',
            'App\Models\Area',
            $this->area_id,
            ['en_name', 'ar_name', 'governorate_id'],
            'Area Updated Successfully',
            'You Can Not Edit This Area',
            'Updated'
        );
    }

    public function delete()
    {
        $this->livewire_delete('App\Models\Area', 'area_id', $this->area_id, 'Area Deleted Successfully', 'Updated');
    }

    public function mount()
    {
        if (app()->getLocale() == 'ar') {
            $this->governorate = Governorate::all(['governorate_id', 'ar_name']);
        } else {
            $this->governorate = Governorate::all(['governorate_id', 'en_name']);
        }
    }
    public function render()
    {
        return view(
            'livewire.dashboard.area.index',
            [
                'areas' => Area::search($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate(5),
            ]
        );
    }
}
