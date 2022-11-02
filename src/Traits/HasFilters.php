<?php

namespace dsoloview\LaravelFiltersSort\Traits;

use dsoloview\LaravelFiltersSort\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;

trait HasFilters
{
    public function scopeFilter(Builder $builder, QueryFilter $filter): Builder
    {
        return $filter->apply($builder);
    }
}