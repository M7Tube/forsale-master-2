<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppSettings extends Model
{
    use HasFactory;
    protected $table = 'app_settings';
    protected $primaryKey = 'app_setting_id';
    protected $fillable = [
        'email', 'phone_number',
        'fax', 'facebook', 'twitter', 'instagram', 'wallet_defualt_balance','defualt_manger_accept',
        'defualt_golden_ad_price',
        'defualt_normal_ad_price',
        'defualt_golden_ad_count',
        'defualt_normal_ad_count',
    ];
}
