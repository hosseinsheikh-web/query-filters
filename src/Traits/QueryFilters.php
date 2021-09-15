<?php

namespace HosseinSheikh\QueryFilters\Traits;

use Illuminate\Pipeline\Pipeline;

trait QueryFilters
{
    protected $filters = [];

    public function scopeFilters($query, $filters)
    {
        return app(Pipeline::class)
            ->send(static::query())
            ->through($filters)
            ->thenReturn();
    }
}
