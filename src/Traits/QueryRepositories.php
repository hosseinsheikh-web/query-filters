<?php

namespace HosseinSheikh\QueryFilters\Traits;

use Illuminate\Pipeline\Pipeline;

trait QueryRepositories
{
    public function scopeQueries($query, $queries)
    {
        return app(Pipeline::class)
            ->send($query)
            ->through($queries)
            ->thenReturn();
    }
}
