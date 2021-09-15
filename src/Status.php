<?php

namespace QueryFilters;

use HosseinSheikh\QueryFilters\Contracts\Filter;

class Status extends Filter
{
    protected function applyFilters($builder)
    {
        return $builder->where('status', request($this->filterName()));
    }
}
