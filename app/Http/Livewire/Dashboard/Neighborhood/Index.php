<?php

namespace App\Http\Livewire\Dashboard\Neighborhood;

use App\Models\Area;
use App\Models\Governorate;
use App\Models\Neighborhood;
use Livewire\Component;
use Livewire\WithPagination as LivewireWithPagination;
use Livewire\WithFileUploads;
use App\Http\Traits\LivewireDashboardTrait;

class Index extends Component
{
    use LivewireDashboardTrait;
    use LivewireWithPagination;
    public $neighborhood_id;
    public $en_name;
    public $ar_name;
    public $governorate_id;
    public $area_id;

    public $govenorates;
    public $areas;
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
                'area_id' => ['required', 'integer', 'exists:areas,area_id'],
            ],
            'App\Models\Neighborhood',
            ['en_name', 'ar_name',  'governorate_id', 'area_id'],
            'Neighborhood Created Successfully',
            'Created'
        );
    }

    public function edit($id)
    {
        $this->livewire_edit('neighborhoods', 'App\Models\Neighborhood', 'neighborhood_id', $id, ['neighborhood_id', 'en_name', 'ar_name',  'governorate_id', 'area_id'], 'WrongNeighborhood', 'You Can Not Edit This Neighborhood');
    }
    public function clear()
    {
        $this->livewire_clear(['neighborhood_id', 'en_name', 'ar_name',  'governorate_id', 'area_id']);
    }
    public function update()
    {
        $this->livewire_update(
            [
                'en_name' => ['string', 'max:72'],
                'ar_name' => ['string', 'max:72'],
                'governorate_id' => ['integer', 'exists:governorates,governorate_id'],
                'area_id' => ['integer', 'exists:areas,area_id'],
            ],
            'neighborhoods',
            'App\Models\Neighborhood',
            $this->neighborhood_id,
            ['en_name', 'ar_name',  'governorate_id', 'area_id'],
            'Neighborhood Updated Successfully',
            'You Can Not Edit This Neighborhood',
            'Updated'
        );
    }

    public function delete()
    {
        $this->livewire_delete('App\Models\Neighborhood', 'neighborhood_id', $this->neighborhood_id, 'Neighborhood Deleted Successfully', 'Updated');
    }

    public function mount()
    {
        $this->govenorates = Governorate::all();
        $this->areas = Area::all();
    }

    public function render()
    {
        return view(
            'livewire.dashboard.neighborhood.index',
            [
                'neighborhoods' => Neighborhood::search($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate(5),
            ]
        );
    }
}
