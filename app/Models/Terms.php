<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terms extends Model
{
    use HasFactory;
    protected $table='terms';
    protected $primaryKey='term_id';
    protected $fillable=['en_terms_conditions','ar_terms_conditions'];
}
