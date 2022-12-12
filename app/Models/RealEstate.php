<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;
use App\ModelFilters\RealEstateFilter;

class RealEstate extends Model
{
    use HasFactory;
    use Filterable;
    use RealEstateFilter;

    private static $whiteListFilter = ['*'];

    protected $table = 'real_estates';
    protected $primaryKey = 'real_estate_id';
    protected $fillable = [
        'en_title',
        'ar_title',
        'ar_desc',
        'en_desc',
        'phone_number',
        'manger_accept',
        'rejected_reason',
        'isPhone_visable',
        'price',//done
        'picture',//done
        'is_special',//done
        'watch_count',
        'apartment_size',//done
        'land_size',//done
        'building_size',//done
        'floor',//done
        'room_count',//done
        'elevator',//done
        'user_id',
        'ros_id',//done
        'REMC_id',//done
        'apartment_status_id',//done
        'building_statuse_id',//done
        'CAAT_id',//done
        'land_type_id',//done
        'governorate_id',//done
        'area_id',//done
        'neighborhood_id',//done
        'ad_type_id',
        'ad_statuse_id',//done
    ];
    public function governorate()
    {
        return $this->belongsTo(Governorate::class, 'governorate_id', 'governorate_id');
    }

    public function Area()
    {
        return $this->belongsTo(Area::class, 'area_id', 'area_id');
    }

    public function Neighborhood()
    {
        return $this->belongsTo(Neighborhood::class, 'neighborhood_id', 'neighborhood_id');
    }

    public function CommercialAndArtificialType()
    {
        return $this->belongsTo(CommercialAndArtificialType::class, 'CAAT_id', 'CAAT_id');
    }

    public function RentOrSale()
    {
        return $this->belongsTo(RentOrSale::class, 'ros_id', 'ros_id');
    }

    public function AdType()
    {
        return $this->belongsTo(AdType::class, 'ad_type_id', 'ad_type_id');
    }

    public function AdStatus()
    {
        return $this->belongsTo(AdStatus::class, 'ad_statuse_id', 'ad_statuse_id');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function RealEstateMainCategory()
    {
        return $this->belongsTo(RealEstateMainCategory::class, 'REMC_id', 'REMC_id');
    }

    public function ApartmentStatus()
    {
        return $this->belongsTo(ApartmentStatus::class, 'apartment_status_id', 'apartment_status_id');
    }

    public function BuildingStatus()
    {
        return $this->belongsTo(BuildingStatus::class, 'building_statuse_id', 'building_statuse_id');
    }

    public function LandType()
    {
        return $this->belongsTo(LandType::class, 'land_type_id', 'land_type_id');
    }
}
