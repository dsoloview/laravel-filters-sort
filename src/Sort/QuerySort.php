<?php

namespace dsoloview\LaravelFiltersSort\Sort;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

abstract class QuerySort
{
    protected Builder $builder;

    protected string $sortBy;

    protected string $sortDirection;

    protected const SORT_DEFAULT = 'created_at';

    protected const DIRECTION_DEFAULT = 'desc';

    public function __construct(?Request $request = null)
    {
        $request = $request ?? request();
        $this->sortBy = $request->get('sort', static::SORT_DEFAULT);
        $this->sortDirection = $request->get('direction', static::DIRECTION_DEFAULT);
    }

    public function apply(Builder $builder): Builder
    {
        $this->builder = $builder;

        if (method_exists($this, $this->sortBy)) {
            call_user_func_array([$this, $this->sortBy], ['direction' => $this->sortDirection]);
        }

        return $this->builder;
    }
}