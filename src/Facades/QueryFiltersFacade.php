<?php

namespace HosseinSheikh\QueryFilters\Facades;

use Illuminate\Support\Facades\Facade;

class QueryFiltersFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'query-filters';
    }
}
