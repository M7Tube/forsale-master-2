<?php

namespace App\Http\Livewire\Dashboard\AppSettings;

use App\Models\Cars;
use App\Models\Jobs;
use App\Models\RealEstate;
use Livewire\Component;

class Statistics extends Component
{
    public $cars;
    public $realestate;
    public $jobs;

    public function mount()
    {
        $this->cars = Cars::count();
        $this->realestate = RealEstate::count();
        $this->jobs = Jobs::count();
    }
    public function render()
    {
        return view('livewire.dashboard.app-settings.statistics');
    }
}
