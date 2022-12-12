<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PushNotification extends Model
{
    use HasFactory;
    protected $table='push_notifications';
    protected $primaryKey='notification_id';
    protected $fillable=['title','body','img'];

}
