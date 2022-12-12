<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealEstateMainCategory extends Model
{
    use HasFactory;
    protected $table = 'real_estate_main_categories';
    protected $primaryKey = 'REMC_id';
    protected $fillable = ['en_name','ar_name'];
}
