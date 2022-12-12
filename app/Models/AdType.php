<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdType extends Model
{
    use HasFactory;
    protected $table = 'ad_types';
    protected $primaryKey = 'ad_type_id';
    protected $fillable = ['en_name', 'ar_name', 'count', 'is_spcial', 'user_id'];

    public function ads()
    {
        return $this->hasMany(Ad::class, 'ad_type_id', 'ad_type_id');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
