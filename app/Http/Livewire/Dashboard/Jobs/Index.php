<?php

namespace App\Http\Livewire\Dashboard\Jobs;

use App\Http\Traits\LivewireDashboardTrait;
use App\Models\Jobs;
use Livewire\Component;
use Livewire\WithPagination as LivewireWithPagination;


class Index extends Component
{
    use LivewireDashboardTrait;
    use LivewireWithPagination;
    protected $paginationTheme = 'bootstrap';

    public $job_id;
    public $ar_title;
    public $en_title;
    public $ar_desc;
    public $en_desc;
    public $phone_number;
    public $manger_accept;
    public $isPhone_visable;
    public $qualification;
    public $age;
    public $salary;
    public $work_hour;
    public $extra_work_hour;
    public $work_hour_rent;
    public $driving_license;
    public $picture;
    public $is_special;
    public $watch_count;
    public $user_id;
    public $governorate_id;
    public $area_id;
    public $jobs_categorie_id;
    public $lang_id;
    public $YOE_id;
    public $ad_type_id;
    public $ad_statuse_id;

    public $orderBy = 'en_title';
    public $orderAsc = true;
    public $search = '';

    public function Create()
    {
        $this->livewire_create(
            [
                'en_name' => ['required', 'string', 'max:72'],
                'ar_name' => ['required', 'string', 'max:72'],
            ],
            'App\Models\Jobs',
            [
                'ar_title',
                'en_title',
                'ar_desc',
                'en_desc',
                'phone_number',
                'manger_accept',
                'isPhone_visable',
                'qualification',
                'age',
                'salary',
                'work_hour',
                'extra_work_hour',
                'work_hour_rent',
                'driving_license',
                'picture',
                'is_special',
                'watch_count',
                'user_id',
                'governorate_id',
                'area_id',
                'jobs_categorie_id',
                'lang_id',
                'YOE_id',
                'ad_type_id',
                'ad_statuse_id',
            ],
            'Job Created Successfully',
            'Created'
        );
    }

    public function edit($id)
    {
        $this->livewire_edit('Jobs', 'App\Models\Jobs', 'job_id', $id, [
            'job_id',
            'ar_title',
            'en_title',
            'ar_desc',
            'en_desc',
            'phone_number',
            'manger_accept',
            'isPhone_visable',
            'qualification',
            'age',
            'salary',
            'work_hour',
            'extra_work_hour',
            'work_hour_rent',
            'driving_license',
            'picture',
            'is_special',
            'watch_count',
            'user_id',
            'governorate_id',
            'area_id',
            'jobs_categorie_id',
            'lang_id',
            'YOE_id',
            'ad_type_id',
            'ad_statuse_id',
        ], 'WrongJobs', 'You Can Not Edit This Job');
    }
    public function clear()
    {
        $this->livewire_clear([
            'job_id',
            'ar_title',
            'en_title',
            'ar_desc',
            'en_desc',
            'phone_number',
            'manger_accept',
            'isPhone_visable',
            'qualification',
            'age',
            'salary',
            'work_hour',
            'extra_work_hour',
            'work_hour_rent',
            'driving_license',
            'picture',
            'is_special',
            'watch_count',
            'user_id',
            'governorate_id',
            'area_id',
            'jobs_categorie_id',
            'lang_id',
            'YOE_id',
            'ad_type_id',
            'ad_statuse_id',
        ]);
    }
    public function update()
    {
        $this->livewire_update(
            [
                'en_name' => ['string', 'max:72'],
                'ar_name' => ['string', 'max:72'],
            ],
            'CT',
            'App\Models\Jobs',
            $this->job_id,
            [
                'ar_title',
                'en_title',
                'ar_desc',
                'en_desc',
                'phone_number',
                'manger_accept',
                'isPhone_visable',
                'qualification',
                'age',
                'salary',
                'work_hour',
                'extra_work_hour',
                'work_hour_rent',
                'driving_license',
                'picture',
                'is_special',
                'watch_count',
                'user_id',
                'governorate_id',
                'area_id',
                'jobs_categorie_id',
                'lang_id',
                'YOE_id',
                'ad_type_id',
                'ad_statuse_id',
            ],
            'Job Updated Successfully',
            'You Can Not Edit This Job',
            'Updated'
        );
    }

    public function delete()
    {
        $this->livewire_delete('App\Models\Jobs', 'job_id', $this->job_id, 'Job Deleted Successfully', 'Updated');
    }

    public function render()
    {
        return view(
            'livewire.dashboard.jobs.index',
            [
                'Jobs' => Jobs::dashboardsearch($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->paginate(5),
            ]
        );
    }
}
