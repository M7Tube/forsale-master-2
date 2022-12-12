<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;
use App\ModelFilters\JobFilter;

class Jobs extends Model
{
    use HasFactory;
    use Filterable;
    use JobFilter;

    private static $whiteListFilter = ['*'];
    protected $table = 'jobs';
    protected $primaryKey = 'job_id';
    protected $fillable = [
        'ar_title',
        'en_title',
        'ar_desc',
        'en_desc',
        'rejected_reason',
        'phone_number',
        'manger_accept',
        'isPhone_visable',
        'qualification',
        'age',//done
        'salary',//done
        'work_hour',//done
        'extra_work_hour',//done
        'work_hour_rent',//
        'driving_license',//done
        'picture',//done
        'is_special',//done
        'watch_count',
        'user_id',
        'governorate_id',//done
        'area_id',//done
        'jobs_categorie_id',//done
        'lang_id',//done
        'YOE_id',//done
        'ad_type_id',
        'ad_statuse_id',//done
    ];

    public  static function dashboardsearch($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('en_title', 'like', '%' . $search . '%')->orWhere('ar_title', 'like', '%' . $search . '%');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function JobCategory()
    {
        return $this->belongsTo(JobsCategory::class, 'jobs_categorie_id', 'jobs_categorie_id');
    }

    public function PersonLanguage()
    {
        return $this->belongsTo(PersonLangueges::class, 'lang_id', 'lang_id');
    }

    public function YearsOfExperience()
    {
        return $this->belongsTo(YearsOfExperience::class, 'YOE_id', 'YOE_id');
    }

    public function Area()
    {
        return $this->belongsTo(Area::class, 'area_id', 'area_id');
    }

    public function AdType()
    {
        return $this->belongsTo(AdType::class, 'ad_type_id', 'ad_type_id');
    }

    public function AdStatus()
    {
        return $this->belongsTo(AdStatus::class, 'ad_statuse_id', 'ad_statuse_id');
    }

    public function governorate()
    {
        return $this->belongsTo(Governorate::class, 'governorate_id', 'governorate_id');
    }
}
