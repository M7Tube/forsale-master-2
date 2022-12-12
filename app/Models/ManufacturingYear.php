<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManufacturingYear extends Model
{
    use HasFactory;
    protected $table = 'manufacturing_years';
    protected $primaryKey = 'year_id';
    protected $fillable = ['from', 'to'];

    // public  static function search($search)
    // {
    //     return empty($search) ? static::query()
    //         : static::query()->where('from', 'like', '%' . $search . '%');
    // }
}
