<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $table = 'areas';
    protected $primaryKey = 'area_id';
    protected $fillable = ['en_name', 'ar_name', 'governorate_id'];

    public  static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('en_name', 'like', '%' . $search . '%')->orWhere('ar_name', 'like', '%' . $search . '%');
    }
    //s
    public function governorate()
    {
        return $this->belongsTo(Governorate::class, 'governorate_id', 'governorate_id');
    }

    public function neighborhood()
    {
        return $this->hasMany(Neighborhood::class, 'area_id', 'area_id');
    }
}
