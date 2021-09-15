<?php

namespace HosseinSheikh\QueryFilters\Providers;

use HosseinSheikh\QueryFilters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class QueryFiltersServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // app()->singleton('query-filters', 'query-filters');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() { }
}
