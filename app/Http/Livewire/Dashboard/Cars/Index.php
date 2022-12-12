<?php

namespace App\Http\Livewire\Dashboard\Cars;

use Livewire\Component;
use App\Http\Traits\LivewireDashboardTrait;
use App\Models\Cars;
use Livewire\WithPagination as LivewireWithPagination;

class Index extends Component
{
    use LivewireDashboardTrait;
    use LivewireWithPagination;
    protected $paginationTheme = 'bootstrap';

    public $car_id;

    public $orderBy = 'en_title';
    public $orderAsc = true;
    public $search = '';

    public function clear()
    {
        $this->livewire_clear([
            'car_id',
        ]);
    }

    public function delete()
    {
        $this->livewire_delete('App\Models\Cars', 'car_id', $this->car_id, 'Car Deleted Successfully', 'Updated');
    }

    public function render()
    {
        return view(
            'livewire.dashboard.cars.index',
            [
                'Cars' => Cars::dashboardsearch($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->paginate(5),
            ]
        );
    }
}
