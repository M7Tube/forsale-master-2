<?php

namespace App\Http\Livewire\Dashboard\PersonLangueges;

use App\Http\Traits\LivewireDashboardTrait;
use App\Models\PersonLangueges;
use Livewire\Component;
use Livewire\WithPagination as LivewireWithPagination;

class Index extends Component
{
    use LivewireDashboardTrait;    use LivewireWithPagination;

    public $lang_id;
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
            'App\Models\PersonLangueges',
            ['en_name', 'ar_name'],
            'Person Langueges Created Successfully',
            'Created'
        );
    }

    public function edit($id)
    {
        $this->livewire_edit('PL', 'App\Models\PersonLangueges', 'lang_id', $id, ['lang_id', 'en_name', 'ar_name'], 'WrongPersonLangueges', 'You Can Not Edit This Person Langueges');
    }
    public function clear()
    {
        $this->livewire_clear(['lang_id', 'en_name', 'ar_name']);
    }
    public function update()
    {
        $this->livewire_update(
            [
                'en_name' => ['string', 'max:72'],
                'ar_name' => ['string', 'max:72'],
            ],
            'PL',
            'App\Models\PersonLangueges',
            $this->lang_id,
            ['en_name', 'ar_name'],
            'Person Langueges Updated Successfully',
            'You Can Not Edit This Person Langueges',
            'Updated'
        );
    }

    public function delete()
    {
        $this->livewire_delete('App\Models\PersonLangueges', 'lang_id', $this->lang_id, 'Person Langueges Deleted Successfully', 'Updated');
    }
    public function render()
    {
        return view(
            'livewire.dashboard.person-langueges.index',
            [
                'PL' => PersonLangueges::search($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate(5),
            ]
        );
    }
}
