<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Neighborhood extends Model
{
    use HasFactory;
    protected $table = 'neighborhoods';
    protected $primaryKey = 'neighborhood_id';
    protected $fillable = ['en_name', 'ar_name',  'governorate_id', 'area_id'];

    public  static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('en_name', 'like', '%' . $search . '%')->orWhere('ar_name', 'like', '%' . $search . '%');
    }

    public function governorate()
    {
        return $this->belongsTo(Governorate::class, 'governorate_id', 'governorate_id');
    }

    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id', 'area_id');
    }
}
