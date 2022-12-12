<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Governorate extends Model
{
    use HasFactory;
    protected $table = 'governorates';
    protected $primaryKey = 'governorate_id';
    protected $fillable = ['en_name','ar_name'];

    public function ads()
    {
        return $this->hasMany(Ad::class, 'governorate_id', 'governorate_id');
    }

    public function areas()
    {
        return $this->hasMany(Area::class, 'governorate_id', 'governorate_id');
    }

    public function neighborhood()
    {
        return $this->hasMany(Neighborhood::class,'governorate_id','governorate_id');
    }

    public  static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('en_name', 'like', '%' . $search . '%')->orWhere('ar_name', 'like', '%' . $search . '%');
    }
}
