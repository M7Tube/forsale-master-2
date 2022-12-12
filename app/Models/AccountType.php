<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    use HasFactory;
    protected $table='account_types';
    protected $primaryKey='account_type_id';
    protected $fillable=['name','roles'];

    public  static function search($search)
    {
        return empty($search)?static::query()
        :static::query()->where('name','like','%'.$search.'%');
    }

    public function users()
    {
        return $this->hasMany(User::class,'account_type_id','account_type_id');
    }
}
