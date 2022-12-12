<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    use HasFactory;
    protected $table='main_categories';
    protected $primaryKey='main_categorie_id';
    protected $fillable=['en_name','ar_name','icon'];

    public function ads()
    {
        return $this->hasMany(Ad::class,'main_categorie_id','main_categorie_id');
    }

    public function filter()
    {
        return $this->hasMany(Filter::class,'main_categorie_id','main_categorie_id');
    }

    public  static function search($search)
    {
        return empty($search)?static::query()
        :static::query()->where('en_name','like','%'.$search.'%')->orWhere('ar_name','like','%'.$search.'%');
    }
}
