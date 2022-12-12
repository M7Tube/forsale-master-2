<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;
    use Filterable;

    private static $whiteListFilter = ['*'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'serial_number',
        'is_personal',
        'is_admin',
        'is_active',
        'birth_date',
        'password',
    ];

    public  static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('first_name', 'like', '%' . $search . '%')->orWhere('last_name', 'like', '%' . $search . '%')->orWhere('phone_number', 'like', '%' . $search . '%')->orWhere('created_at', 'like', '%' . $search . '%');
    }

    public function accountType()
    {
        return $this->belongsTo(AccountType::class, 'account_type_id', 'account_type_id');
    }

    public function rates()
    {
        return $this->hasMany(Rate::class, 'user_id', 'user_id');
    }

    public function notifications()
    {
        return $this->hasMany(Notifcation::class, 'user_id', 'user_id');
    }

    public function ads()
    {
        return $this->hasMany(Ad::class, 'user_id', 'user_id');
    }

    public function SpcialAds()
    {
        return $this->hasMany(SpcialAd::class, 'user_id', 'user_id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
