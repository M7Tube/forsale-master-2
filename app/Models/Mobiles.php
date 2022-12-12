<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;
use App\ModelFilters\MobileFilter;

class Mobiles extends Model
{
    use HasFactory;
    use Filterable;
    use MobileFilter;
    protected $table = 'mobiles';
    protected $primaryKey = 'mobile_id';
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
        'duration_of_use', // range filter (static)
        'ram', // range filter (static)
        'memory', // from (getAddNewAdInfo) link (multiselect)
        'customs_paid', // from (getAddNewAdInfo) link (multiselect)
        'user_id',
        'governorate_id', // from (getAddNewAdInfo) link (multiselect)
        'ad_type_id',
        'ad_statuse_id', // from (getAddNewAdInfo) link (multiselect)
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
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
