<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpcialAd extends Model
{
    use HasFactory;
    protected $table='spcial_ads';
    protected $primaryKey='spcial_ad_id';
    protected $fillable=['en_title','ar_title','en_desc','ar_desc','is_golden','duration','picture','user_id'];

    public  static function search($search)
    {
        return empty($search)?static::query()
        :static::query()->where('en_title','like','%'.$search.'%')->orWhere('ar_title','like','%'.$search.'%');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','user_id');
    }

}
