<?php

namespace App\Http\Livewire\Dashboard\ContinentOfOrigin;

use App\Http\Traits\LivewireDashboardTrait;
use App\Models\ContinentOfOrigin;
use Livewire\Component;
use Livewire\WithPagination as LivewireWithPagination;


class Index extends Component
{
    use LivewireDashboardTrait;
    use LivewireWithPagination;

    public $continent_id;
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
            'App\Models\ContinentOfOrigin',
            ['en_name', 'ar_name'],
            'Continent Of Origin Created Successfully',
            'Created'
        );
    }

    public function edit($id)
    {
        $this->livewire_edit('COO', 'App\Models\ContinentOfOrigin', 'continent_id', $id, ['continent_id', 'en_name', 'ar_name'], 'WrongContinentOfOrigin', 'You Can Not Edit This Continent Of Origin');
    }
    public function clear()
    {
        $this->livewire_clear(['continent_id', 'en_name', 'ar_name']);
    }
    public function update()
    {
        $this->livewire_update(
            [
                'en_name' => ['string', 'max:72'],
                'ar_name' => ['string', 'max:72'],
            ],
            'COO',
            'App\Models\ContinentOfOrigin',
            $this->continent_id,
            ['en_name', 'ar_name'],
            'Continent Of Origin Updated Successfully',
            'You Can Not Edit This Continent Of Origin',
            'Updated'
        );
    }

    public function delete()
    {
        $this->livewire_delete('App\Models\ContinentOfOrigin', 'continent_id', $this->continent_id, 'Continent Of Origin Deleted Successfully', 'Updated');
    }

    public function render()
    {
        return view(
            'livewire.dashboard.continent-of-origin.index',
            [
                'COO' => ContinentOfOrigin::search($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate(5),
            ]
        );
    }
}
