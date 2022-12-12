<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdStatus extends Model
{
    //for spcifing the status of the  ad for example "مطلوب" "معروض"
    use HasFactory;
    protected $table = 'ad_statuses';
    protected $primaryKey = 'ad_statuse_id';
    protected $fillable = ['en_name', 'ar_name'];

    public  static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('en_name', 'like', '%' . $search . '%')->orWhere('ar_name', 'like', '%' . $search . '%');
    }

    public function ads()
    {
        return $this->hasMany(Ad::class, 'ad_statuse_id', 'ad_statuse_id');
    }
}
