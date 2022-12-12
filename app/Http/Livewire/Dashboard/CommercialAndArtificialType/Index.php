<?php

namespace App\Http\Livewire\Dashboard\CommercialAndArtificialType;

use App\Http\Traits\LivewireDashboardTrait;
use App\Models\CommercialAndArtificialType;
use Livewire\Component;
use Livewire\WithPagination as LivewireWithPagination;

class Index extends Component
{
    use LivewireDashboardTrait;
    use LivewireWithPagination;

    public $CAAT_id;
    public $en_name;
    public $ar_name;
    public $REMC_id;

    public $orderBy = 'en_name';
    public $orderAsc = true;
    public $search = '';

    public function edit($id)
    {
        $this->livewire_edit('CAAT', 'App\Models\CommercialAndArtificialType', 'CAAT_id', $id, ['CAAT_id', 'en_name', 'ar_name'], 'WrongCommercialAndArtificialType', 'You Can Not Edit This Commercial And Artificial Type');
    }
    public function clear()
    {
        $this->livewire_clear(['CAAT_id', 'en_name', 'ar_name', 'REMC_id']);
    }
    public function update()
    {
        $this->livewire_update(
            [
                'en_name' => ['string', 'max:72'],
                'ar_name' => ['string', 'max:72'],
            ],
            'CT',
            'App\Models\CommercialAndArtificialType',
            $this->CAAT_id,
            ['en_name', 'ar_name'],
            'Commercial And Artificial Type Updated Successfully',
            'You Can Not Edit This Commercial And Artificial Type',
            'Updated'
        );
    }

    public function delete()
    {
        $this->livewire_delete('App\Models\CommercialAndArtificialType', 'CAAT_id', $this->CAAT_id, 'Commercial And Artificial Type Deleted Successfully', 'Updated');
    }
    public function render()
    {
        return view(
            'livewire.dashboard.commercial-and-artificial-type.index',
            [
                'CAAT' => CommercialAndArtificialType::search($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate(5),
            ]
        );
    }
}
