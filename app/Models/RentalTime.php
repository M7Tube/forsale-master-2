<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalTime extends Model
{
    use HasFactory;
    protected $table = 'rental_times';
    protected $primaryKey = 'rental_time_id';
    protected $fillable = ['en_rent_name', 'ar_rent_name'];

    public  static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('en_rent_name', 'like', '%' . $search . '%')->orWhere('ar_rent_name', 'like', '%' . $search . '%');
    }

    public function ads()
    {
        return $this->hasMany(Ad::class, 'rental_time_id', 'rental_time_id');
    }
}
