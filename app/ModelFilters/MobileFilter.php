<?php

namespace App\ModelFilters;

use Illuminate\Database\Eloquent\Builder;

trait MobileFilter
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
        return $builder->where('en_title', 'like', '%' . $value . '%')
            ->orWhere('ar_title', 'like', '%' . $value . '%')
            ->orWhere('price', 'like', '%' . $value . '%')
            ->orWhere('en_desc', 'like', '%' . $value . '%')
            ->orWhere('ar_desc', 'like', '%' . $value . '%');
    }
}
