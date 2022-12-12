<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifcation extends Model
{
    use HasFactory;
    protected $table='notifcations';
    protected $primaryKey='notifcation_id';
    protected $fillable=['title','logo','body','user_id','ad_id'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','user_id');
    }

    public function ad()
    {
        return $this->belongsTo(Ad::class,'ad_id','ad_id');
    }
}
