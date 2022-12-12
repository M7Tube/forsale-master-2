<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandType extends Model
{
    use HasFactory;
    protected $table = 'land_types';
    protected $primaryKey = 'land_type_id';
    protected $fillable = ['en_name','ar_name'];
}
