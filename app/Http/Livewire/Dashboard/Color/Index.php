<?php

namespace App\Http\Livewire\Dashboard\Color;

use App\Models\Color;
use Livewire\Component;
use App\Http\Traits\LivewireDashboardTrait;
use Livewire\WithPagination as LivewireWithPagination;

class Index extends Component
{
    use LivewireDashboardTrait;
    use LivewireWithPagination;

    public $color_id;
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
            'App\Models\Color',
            ['en_name', 'ar_name'],
            'Color Created Successfully',
            'Created'
        );
    }

    public function edit($id)
    {
        $this->livewire_edit('C', 'App\Models\Color', 'color_id', $id, ['color_id', 'en_name', 'ar_name'], 'WrongColor', 'You Can Not Edit This Color');
    }
    public function clear()
    {
        $this->livewire_clear(['color_id', 'en_name', 'ar_name']);
    }
    public function update()
    {
        $this->livewire_update(
            [
                'en_name' => ['string', 'max:72'],
                'ar_name' => ['string', 'max:72'],
            ],
            'C',
            'App\Models\Color',
            $this->color_id,
            ['en_name', 'ar_name'],
            'Color Updated Successfully',
            'You Can Not Edit This Color',
            'Updated'
        );
    }

    public function delete()
    {
        $this->livewire_delete('App\Models\Color', 'color_id', $this->color_id, 'Color Deleted Successfully', 'Updated');
    }
    public function render()
    {
        return view(
            'livewire.dashboard.color.index',
            [
                'C' => Color::search($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate(5),
            ]
        );
    }
}
