<?php

namespace dsoloview\LaravelFiltersSort\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

abstract class QueryFilter
{
    private Request $request;

    protected Builder $builder;

    public function __construct(?Request $request = null)
    {
        $this->request = $request ?? request();
    }

    public function filters(): array
    {
        return $this->request->get('filters', []);
    }

    public function apply(Builder $builder): Builder
    {
        $this->builder = $builder;

        foreach ($this->filters() as $name => $value) {
            if (method_exists($this, $name)) {
                call_user_func_array([$this, $name], array_filter([$value]));
            }
        }

        return $this->builder;
    }

    public static function getFilterableFields(): array
    {
        $abstractMethods = get_class_methods(self::class);
        $methods = get_class_methods(static::class);
        return array_diff($methods, $abstractMethods);
    }
}