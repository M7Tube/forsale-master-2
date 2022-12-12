<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContinentOfOrigin extends Model
{
    use HasFactory;
    protected $table = 'continent_of_origins';
    protected $primaryKey = 'continent_id';
    protected $fillable = ['en_name', 'ar_name'];

    public  static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('en_name', 'like', '%' . $search . '%')->orWhere('ar_name', 'like', '%' . $search . '%');
    }

    public function ads()
    {
        return $this->hasMany(Ad::class, 'continent_id', 'continent_id');
    }
}
