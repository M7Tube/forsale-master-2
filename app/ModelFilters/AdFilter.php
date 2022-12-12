<?php

namespace App\ModelFilters;

use Illuminate\Database\Eloquent\Builder;

trait AdFilter
{
    /**
     * This is a sample custom query
     * @param \Illuminate\Database\Eloquent\Builder $builder
     * @param                                       $value
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function search(Builder $builder, $value)
    {
        return $builder->where('name', 'like', '%' . $value . '%')
            ->orWhere('descriptions', 'like', '%' . $value . '%')
            ->orWhere('phone_number', 'like', '%' . $value . '%')
            ->orWhere('price', 'like', '%' . $value . '%')
            ->orWhere('manufacturing_year', 'like', '%' . $value . '%');
    }
    public function main_search(Builder $builder, $value)
    {
        return $builder->where('name', 'like', '%' . $value . '%');
    }
}
