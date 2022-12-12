<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $table = 'messages';
    protected $primaryKey = 'message_id';
    protected $fillable = ['message', 'is_admin', 'read_state', 'user_id'];

    public  static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('message', 'like', '%' . $search . '%');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
