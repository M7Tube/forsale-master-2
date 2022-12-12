<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FcmToken extends Model
{
    use HasFactory;
    protected $table = 'fcm_tokens';
    protected $primaryKey = 'token_id';
    protected $fillable = ['fcmtoken', 'user_id'];
}
