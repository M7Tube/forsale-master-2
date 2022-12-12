<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;
    protected $table='wallets';
    protected $primaryKey='wallet_id';
    protected $fillable=['balance','user_id'];

    public  static function search($search)
    {
        return empty($search)?static::query()
        :static::query()->where('user_id','like','%'.$search.'%');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','user_id');
    }

}
