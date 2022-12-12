<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsCategory extends Model
{
    use HasFactory;
    protected $table = 'jobs_categories';
    protected $primaryKey = 'jobs_categorie_id';
    protected $fillable = ['en_name','ar_name'];
}
