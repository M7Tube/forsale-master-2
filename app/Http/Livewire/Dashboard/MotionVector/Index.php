<?php

namespace App\Http\Livewire\Dashboard\MotionVector;

use App\Http\Traits\LivewireDashboardTrait;
use App\Models\MotionVector;
use Livewire\WithPagination as LivewireWithPagination;

use Livewire\Component;

class Index extends Component
{
    use LivewireDashboardTrait;
    use LivewireWithPagination;

    public $motion_vector_id;
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
            'App\Models\MotionVector',
            ['en_name', 'ar_name'],
            'Motion Vector Created Successfully',
            'Created'
        );
    }

    public function edit($id)
    {
        $this->livewire_edit('MV', 'App\Models\MotionVector', 'motion_vector_id', $id, ['motion_vector_id', 'en_name', 'ar_name'], 'WrongMotionVector', 'You Can Not Edit This Motion Vector');
    }
    public function clear()
    {
        $this->livewire_clear(['motion_vector_id', 'en_name', 'ar_name']);
    }
    public function update()
    {
        $this->livewire_update(
            [
                'en_name' => ['string', 'max:72'],
                'ar_name' => ['string', 'max:72'],
            ],
            'MV',
            'App\Models\MotionVector',
            $this->motion_vector_id,
            ['en_name', 'ar_name'],
            'Motion Vector Updated Successfully',
            'You Can Not Edit This Motion Vector',
            'Updated'
        );
    }

    public function delete()
    {
        $this->livewire_delete('App\Models\MotionVector', 'motion_vector_id', $this->motion_vector_id, 'Motion Vector Deleted Successfully', 'Updated');
    }
    public function render()
    {
        return view(
            'livewire.dashboard.motion-vector.index',
            [
                'MV' => MotionVector::search($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate(5),
            ]
        );
    }
}
