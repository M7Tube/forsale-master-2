<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $table = 'favorites';
    protected $primaryKey = 'favorite_id';
    protected $fillable = ['user_id', 'car_id', 'real_estate_id', 'job_id','mobile_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function car()
    {
        return $this->belongsTo(Cars::class, 'car_id', 'car_id');
    }

    public function real_estate()
    {
        return $this->belongsTo(RealEstate::class, 'real_estate_id', 'real_estate_id');
    }

    public function job()
    {
        return $this->belongsTo(Jobs::class, 'job_id', 'job_id');
    }

    public function mobile()
    {
        return $this->belongsTo(Mobiles::class, 'mobile_id', 'mobile_id');
    }
}
