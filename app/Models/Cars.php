<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;
use App\ModelFilters\CarFilter;

class Cars extends Model
{
    use HasFactory;
    use Filterable;
    use CarFilter;
    private static $whiteListFilter = ['*'];
    // private static $ignoreRequest = ['lang'];

    protected $table = 'cars';
    protected $primaryKey = 'car_id';
    protected $fillable = [
        'ar_title',
        'en_title',
        'ar_desc',
        'en_desc',
        'phone_number',
        'rejected_reason',
        'manger_accept',
        'isPhone_visable',
        'price', // range filter (static)
        'picture', // with-without picture filter (static)
        'is_special', // is_spcial filter (static)
        'watch_count',
        'manufacturing_year', // range filter (static)
        'kilometrag', // range filter (static)
        'car_type_id', // from (getAddNewAdInfo) link (multiselect)
        'car_status_id', // from (getAddNewAdInfo) link (multiselect)
        'ros_id', // from (getAddNewAdInfo) link (multiselect)
        'motion_vector_id', // from (getAddNewAdInfo) link (multiselect)
        'user_id',
        'cof_id', // from (getAddNewAdInfo) link (multiselect)
        'continent_id', // from (getAddNewAdInfo) link (multiselect)
        'rental_time_id', // from (getAddNewAdInfo) link (multiselect)
        'color_id', // from (getAddNewAdInfo) link (multiselect)
        'governorate_id', // from (getAddNewAdInfo) link (multiselect)
        'ad_type_id',
        'ad_statuse_id', // from (getAddNewAdInfo) link (multiselect)
    ];

    public function reRender()
    {
        return Cars::filter()->paginate(20, ['car_id', 'ar_title', 'ar_desc', 'en_title', 'en_desc', 'phone_number', 'manufacturing_year', 'picture', 'is_special', 'price', 'manger_accept', 'governorate_id', 'created_at']);
    }

    public function CarType()
    {
        return $this->belongsTo(CarType::class, 'car_type_id', 'car_type_id');
    }

    public function CarStatus()
    {
        return $this->belongsTo(CarStatus::class, 'car_status_id', 'car_status_id');
    }

    public function RentOrSale()
    {
        return $this->belongsTo(RentOrSale::class, 'ros_id', 'ros_id');
    }

    public function MotionVector()
    {
        return $this->belongsTo(MotionVector::class, 'motion_vector_id', 'motion_vector_id');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function CountryOfManufacture()
    {
        return $this->belongsTo(CountryOfManufacture::class, 'cof_id', 'cof_id');
    }

    public function ContinentOfOrigins()
    {
        return $this->belongsTo(ContinentOfOrigin::class, 'continent_id', 'continent_id');
    }

    public function Color()
    {
        return $this->belongsTo(Color::class, 'color_id', 'color_id');
    }

    public function RentalTime()
    {
        return $this->belongsTo(RentalTime::class, 'rental_time_id', 'rental_time_id');
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
    public  static function dashboardsearch($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('en_title', 'like', '%' . $search . '%')->orWhere('ar_title', 'like', '%' . $search . '%');
    }
}
