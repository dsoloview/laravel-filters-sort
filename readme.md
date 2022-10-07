
# Laravel easy filters and sort

A small package that will allow you to easily and configurably filter and sort your query




## Features

- Customize sorting and filtering for each parameter
- Easy to set default options
- Structures the code
- Easily expandable



## Installation

Install dsoloview/laravel-filters-sort from composer

```bash
  composer require dsoloview/laravel-filters-sort
```

## Usage


 - [Model](###Model)
 - [Filter](###Filter)
 - [Sort](###Sort)
 - [Usage](###Paginate)

 


### Model

For the model, you need to add traits **HasFilters** and **HasSort**
![Model](https://raw.github.com/dsoloview/laravel-filters-sort/master/screenshots/Model.png)

### Filter 

Create filter class for your model and extends it from *dsoloview\LaravelFiltersSort\Filters\QueryFilter*

Сreate a method for each parameter you will receive from the filter request

**For example**:

`applicaitons?filters[categories][]=7&filters[search]=myApp`

![Filter](https://raw.github.com/dsoloview/laravel-filters-sort/master/screenshots/Filters.png)

### Sort

Create sort class for your model and extends it from *dsoloview\LaravelFiltersSort\Sort\QuerySort*

Сreate a method for each parameter you will receive from the sort request

**For example**:

`applicaitons?sort=id&direction=asc`

![Sort](https://raw.github.com/dsoloview/laravel-filters-sort/master/screenshots/Sort.png)

You can set default param for sort

`protected const SORT_DEFAULT = 'param'`

And for direction

`protected const DIRECTION_DEFAULT = 'asc|desc'`

### Usage

Traits add scopes `filter(QueryFilter)` and `sort(QuerySort)` to your model

![Usage](https://raw.github.com/dsoloview/laravel-filters-sort/master/screenshots/Usage.png)

You can pass your filter and sort classes to scopes like in the screenshot.

After it you can make `get()` or `paginate()` like in example.












## Support

For support, telegram **@dsoloview**.

