<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommercialAndArtificialType extends Model
{
    use HasFactory;
    protected $table = 'commercial_and_artificial_types';
    protected $primaryKey = 'CAAT_id';
    protected $fillable = ['en_name', 'ar_name', 'REMC_id'];

    public  static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('en_name', 'like', '%' . $search . '%')->orWhere('ar_name', 'like', '%' . $search . '%');
    }
    public function RealEstateMainCategory()
    {
        return $this->belongsTo(RealEstateMainCategory::class, 'REMC_id', 'REMC_id');
    }
}
