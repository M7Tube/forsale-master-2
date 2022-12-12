<?php

namespace App\Http\Livewire\Dashboard\AllAds;

use Livewire\WithPagination as LivewireWithPagination;
use App\Models\Cars;
use App\Models\Jobs;
use App\Models\RealEstate;
use Livewire\Component;

class AcceptAds extends Component
{
    use LivewireWithPagination;
    protected $paginationTheme = 'bootstrap';

    public $user_id;
    public $readyToLoad = false;
    public $category;
    public $rejected_reason;

    protected $data;

    public function boot()
    {
        $this->category = 'App\Models\Cars';
        $this->resetPage('carspage');
        $this->resetPage('jobspage');
        $this->resetPage('realestatepage');
    }

    // public function updatedMangerAccept()
    // {
    //     $this->resetPage('carspage');
    //     $this->resetPage('jobspage');
    //     $this->resetPage('realestatepage');
    //     if ($this->category == 'App\Models\Cars') {
    //         $this->data = [
    //             'cars' => Cars::latest()->paginate(8, ['car_id', 'en_title', 'ar_title', 'price', 'picture', 'manger_accept', 'governorate_id', 'created_at'], 'carspage'),
    //             'jobs' => [],
    //             'real_estate' => [],
    //         ];
    //     } else if ($this->category == 'App\Models\Jobs') {
    //         $this->data = [
    //             'real_estate' => RealEstate::latest()->paginate(8, ['real_estate_id', 'en_title', 'ar_title', 'price', 'picture', 'manger_accept', 'governorate_id', 'created_at'], 'realestatepage'),
    //             'cars' => [],
    //             'jobs' => [],
    //         ];
    //     } else if ($this->category == 'App\Models\RealEstate') {
    //         $this->data = [
    //             'jobs' => Jobs::latest()->paginate(8, ['job_id', 'en_title', 'ar_title', 'salary', 'picture', 'manger_accept', 'governorate_id', 'created_at'], 'jobspage'),
    //             'cars' => [],
    //             'real_estate' => [],
    //         ];
    //     }
    // }

    public function accept($category, $id)
    {
        if ($category == 1) {
            $ad = Cars::findOrFail($id);
            if ($ad) {
                $ad->manger_accept = 2;
                $ad->save();
            } else {
                abort(404);
            }
        } else if ($category == 2) {
            $ad = RealEstate::findOrFail($id);
            if ($ad) {
                $ad->manger_accept = 2;
                $ad->save();
            } else {
                abort(404);
            }
        } else if ($category == 3) {
            $ad = Jobs::findOrFail($id);
            if ($ad) {
                $ad->manger_accept = 2;
                $ad->save();
            } else {
                abort(404);
            }
        } else {
            abort(404);
        }
    }

    public function reject($category, $id)
    {
        if ($category == 1) {
            $ad = Cars::findOrFail($id);
            if ($ad) {
                $ad->manger_accept = 0;
                $ad->rejected_reason = $this->rejected_reason ?? '';
                $ad->save();
                return redirect()->route('web.crud.AcceptAds', app()->getLocale());
            } else {
                abort(404);
            }
        } else if ($category == 2) {
            $ad = RealEstate::findOrFail($id);
            if ($ad) {
                $ad->manger_accept = 0;
                $ad->rejected_reason = $this->rejected_reason ?? '';
                $ad->save();
                return redirect()->route('web.crud.AcceptAds', app()->getLocale());
            } else {
                abort(404);
            }
        } else if ($category == 3) {
            $ad = Jobs::findOrFail($id);
            if ($ad) {
                $ad->manger_accept = 0;
                $ad->rejected_reason = $this->rejected_reason ?? '';
                $ad->save();
                return redirect()->route('web.crud.AcceptAds', app()->getLocale());
            } else {
                abort(404);
            }
        } else {
            abort(404);
        }
    }

    public function loadData()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        $this->emit('gotoTop');
        if ($this->category == 'App\Models\Cars') {
            return view(
                'livewire.dashboard.all-ads.accept-ads',
                [
                    'data' => $this->readyToLoad
                        ? $this->data = [
                            'cars' => $this->category::where('manger_accept', 1)->latest()->paginate(8, ['car_id', 'en_title', 'ar_title', 'price', 'picture', 'manger_accept', 'governorate_id', 'created_at'], 'carspage'),
                            'jobs' => [],
                            'real_estate' => [],
                        ]
                        : [],
                ]
            );
        } else if ($this->category == 'App\Models\RealEstate') {
            return view(
                'livewire.dashboard.all-ads.accept-ads',
                [
                    'data' => $this->readyToLoad
                        ?  $this->data = [
                            'real_estate' => $this->category::where('manger_accept', 1)->latest()->paginate(8, ['real_estate_id', 'en_title', 'ar_title', 'price', 'picture', 'manger_accept', 'governorate_id', 'created_at'], 'realestatepage'),
                            'cars' => [],
                            'jobs' => [],
                        ]
                        : [],
                ]
            );
        } else if ($this->category == 'App\Models\Jobs') {
            return view(
                'livewire.dashboard.all-ads.accept-ads',
                [
                    'data' => $this->readyToLoad
                        ?  $this->data = [
                            'jobs' => $this->category::where('manger_accept', 1)->latest()->paginate(8, ['job_id', 'en_title', 'ar_title', 'salary', 'picture', 'manger_accept', 'governorate_id', 'created_at'], 'jobspage'),
                            'cars' => [],
                            'real_estate' => [],
                        ]
                        : [],
                ]
            );
        }
    }
}
