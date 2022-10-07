<?php

use dsoloview\LaravelFiltersSort\Traits\HasFilters;
use dsoloview\LaravelFiltersSort\Traits\HasSort;
use Illuminate\Database\Eloquent\Model;

class ApplicationModel extends Model
{
    use HasSort, HasFilters;

    protected $guarded = ['id'];

}