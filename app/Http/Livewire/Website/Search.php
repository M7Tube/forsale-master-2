<?php

namespace App\Http\Livewire\Website;

use App\Models\Cars;
use App\Models\Jobs;
use App\Models\RealEstate;
use Livewire\Component;
use Livewire\WithPagination as LivewireWithPagination;

class Search extends Component
{
    use LivewireWithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;
    public $readyToLoad = false;
    public $category;

    public function boot()
    {
        $this->search = request()->query('search');
        $this->category = 1;
    }

    public function loadData()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        $this->emit('gotoTop');
        if ($this->category == 1 && $this->search != null) {
            return view('livewire.website.search', [
                'data' => $this->readyToLoad
                    ? $this->data = [
                        'cars' => Cars::where('en_title', 'like', '%' . $this->search ?? '' . '%')->orWhere('ar_title', 'like', '%' . $this->search ?? '' . '%')->paginate(2, ['car_id', 'en_title', 'ar_title', 'price', 'picture', 'manger_accept', 'governorate_id', 'created_at'], 'carspage'),
                        'real_estate' => [],
                        'jobs' => [],
                    ]
                    : [],
            ]);
        } else if ($this->category == 2 && $this->search != null) {
            return view('livewire.website.search', [
                'data' => $this->readyToLoad
                    ? $this->data = [
                        'cars' => [],
                        'real_estate' => RealEstate::where('en_title', 'like', '%' . $this->search ?? '' . '%')->orWhere('ar_title', 'like', '%' . $this->search ?? '' . '%')->paginate(2, ['real_estate_id', 'en_title', 'ar_title', 'price', 'picture', 'manger_accept', 'governorate_id', 'created_at'], 'realestatepage'),
                        'jobs' => [],
                    ]
                    : [],
            ]);
        } else if ($this->category == 3 && $this->search != null) {
            return view('livewire.website.search', [
                'data' => $this->readyToLoad
                    ? $this->data = [
                        'cars' => [],
                        'real_estate' => [],
                        'jobs' => Jobs::where('en_title', 'like', '%' . $this->search ?? '' . '%')->orWhere('ar_title', 'like', '%' . $this->search ?? '' . '%')->paginate(2, ['job_id', 'en_title', 'ar_title', 'salary', 'picture', 'manger_accept', 'governorate_id', 'created_at'], 'jobspage'),
                    ]
                    : [],
            ]);
        }
        return view('livewire.website.search', [
            'data' => $this->readyToLoad
                ? $this->data = [
                    'cars' => [],
                    'real_estate' => [],
                    'jobs' => [],
                ]
                : [],
        ]);
    }
}
