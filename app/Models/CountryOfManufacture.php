<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryOfManufacture extends Model
{
    use HasFactory;
    protected $table = 'country_of_manufactures';
    protected $primaryKey = 'cof_id';
    protected $fillable = ['en_name','ar_name'];

    public  static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('en_name', 'like', '%' . $search . '%')->orWhere('ar_name', 'like', '%' . $search . '%');
    }

    public function ads()
    {
        return $this->hasMany(Ad::class, 'cof_id', 'cof_id');
    }
}
