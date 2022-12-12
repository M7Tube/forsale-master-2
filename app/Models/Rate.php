<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    protected $table = 'rates';
    protected $primaryKey = 'rate_id';
    protected $fillable = ['reason', 'rate_from_5', 'category', 'user_id', 'ad_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function ad()
    {
        return $this->belongsTo(Ad::class, 'ad_id', 'ad_id');
    }
}
