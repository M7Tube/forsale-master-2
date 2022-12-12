<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    use HasFactory;
    protected $table='filters';
    protected $primaryKey='filter_id';
    protected $fillable=['name','values','filter_type_id','main_categorie_id'];

    public  static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('name', 'like', '%' . $search . '%');
    }
    
    public function filterType()
    {
        return $this->belongsTo(FilterType::class,'filter_type_id','filter_type_id');
    }

    public function category()
    {
        return $this->belongsTo(MainCategory::class,'main_categorie_id','main_categorie_id');
    }

}
