<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;
use App\ModelFilters\AdFilter;

class Ad extends Model
{
    use HasFactory;
    use Filterable;
    use AdFilter;

    private static $whiteListFilter = ['*'];

    protected $table = 'ads';
    protected $primaryKey = 'ad_id';
    protected $fillable = [
        'name',
        'descriptions',
        'phone_number',
        'picture',
        'is_special',
        'price',
        'manger_accept',
        'rejected_reason',
        'isPhone_visable',
        'manufacturing_year',
        'watch_count',
        'cof_id',
        'color_id',
        'ad_type_id',
        'ad_statuse_id',
        'rental_time_id',
        'main_categorie_id',
        'governorate_id',
        'motion_vector_id',
        'user_id',
    ];

    public function countryOfManufacturing()
    {
        return $this->belongsTo(CountryOfManufacture::class, 'cof_id', 'cof_id');
    }

    public function motionvector()
    {
        return $this->belongsTo(MotionVector::class, 'motion_vector_id', 'motion_vector_id');
    }
    public function rates()
    {
        return $this->hasMany(Rate::class, 'ad_id', 'ad_id');
    }

    public function notifications()
    {
        return $this->hasMany(Notifcation::class, 'ad_id', 'ad_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function adType()
    {
        return $this->belongsTo(AdType::class, 'ad_type_id', 'ad_type_id');
    }

    public function adStatus()
    {
        return $this->belongsTo(AdStatus::class, 'ad_statuse_id', 'ad_statuse_id');
    }

    public function governorate()
    {
        return $this->belongsTo(Governorate::class, 'governorate_id', 'governorate_id');
    }

    public function category()
    {
        return $this->belongsTo(MainCategory::class, 'main_categorie_id', 'main_categorie_id');
    }
}
