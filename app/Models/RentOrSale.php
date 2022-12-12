<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentOrSale extends Model
{
    use HasFactory;
    protected $table = 'rent_or_sales';
    protected $primaryKey = 'ros_id';
    protected $fillable = ['en_name', 'ar_name'];
}
