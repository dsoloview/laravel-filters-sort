<?php

use dsoloview\LaravelFiltersSort\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;

class ApplicationFilter extends QueryFilter
{
    public function categories(array $categoriesIds): Builder
    {
        return $this->builder->whereIn('caregory_id', $categoriesIds);
    }

    public function search(string $search): Builder
    {
        return $this->builder->where('title', 'like', "%$search");
    }

}