<?php

namespace App\Http\Livewire\Dashboard\YearsOfExperience;

use App\Http\Traits\LivewireDashboardTrait;
use App\Models\YearsOfExperience;
use Livewire\Component;
use Livewire\WithPagination as LivewireWithPagination;


class Index extends Component
{
    use LivewireDashboardTrait;
    use LivewireWithPagination;

    public $YOE_id;
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
            'App\Models\YearsOfExperience',
            ['en_name', 'ar_name'],
            'Years Of Experience Created Successfully',
            'Created'
        );
    }

    public function edit($id)
    {
        $this->livewire_edit('YOE', 'App\Models\YearsOfExperience', 'YOE_id', $id, ['YOE_id', 'en_name', 'ar_name'], 'WrongYearsOfExperience', 'You Can Not Edit This Years Of Experience');
    }
    public function clear()
    {
        $this->livewire_clear(['YOE_id', 'en_name', 'ar_name']);
    }
    public function update()
    {
        $this->livewire_update(
            [
                'en_name' => ['string', 'max:72'],
                'ar_name' => ['string', 'max:72'],
            ],
            'YOE',
            'App\Models\YearsOfExperience',
            $this->YOE_id,
            ['en_name', 'ar_name'],
            'Years Of Experience Updated Successfully',
            'You Can Not Edit This Years Of Experience',
            'Updated'
        );
    }

    public function delete()
    {
        $this->livewire_delete('App\Models\YearsOfExperience', 'YOE_id', $this->YOE_id, 'Years Of Experience Deleted Successfully', 'Updated');
    }

    public function render()
    {
        return view(
            'livewire.dashboard.years-of-experience.index',
            [
                'YOE' => YearsOfExperience::search($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate(5),
            ]
        );
    }
}
