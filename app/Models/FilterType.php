<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilterType extends Model
{
    use HasFactory;
    protected $table = 'filter_types';
    protected $primaryKey = 'filter_type_id';
    protected $fillable = ['name'];


    public  static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('name', 'like', '%' . $search . '%');
    }

    public function filters()
    {
        return $this->hasMany(Filter::class, 'filter_type_id', 'filter_type_id');
    }
}
