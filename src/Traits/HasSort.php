<?php

namespace dsoloview\LaravelFiltersSort\Traits;

use dsoloview\LaravelFiltersSort\Sort\QuerySort;
use Illuminate\Database\Eloquent\Builder;

trait HasSort
{
    public function sort(Builder $builder, QuerySort $sort): Builder
    {
        return $sort->apply($builder);
    }
}