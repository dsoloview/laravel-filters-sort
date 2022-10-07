<?php

use dsoloview\LaravelFiltersSort\Sort\QuerySort;
use Illuminate\Database\Eloquent\Builder;

class ApplicationSort extends QuerySort
{
    protected const SORT_DEFAULT = 'id';
    protected const DIRECTION_DEFAULT = 'desc';

    public function id(string $direction): Builder
    {
        return $this->builder->orderBy('id', $direction);
    }

    public function category(string $direction): Builder
    {
        return $this->builder->join('application_categories', 'category_id', '=', 'application_categories.id')
            ->orderBy('application_categories.name', $direction);
    }
}