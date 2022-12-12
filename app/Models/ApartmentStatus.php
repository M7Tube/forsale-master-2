<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApartmentStatus extends Model
{
    use HasFactory;
    protected $table = 'apartment_statuses';
    protected $primaryKey = 'apartment_status_id';
    protected $fillable = ['en_name', 'ar_name'];

    public  static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('en_name', 'like', '%' . $search . '%')->orWhere('ar_name', 'like', '%' . $search . '%');
    }
}
