<?php

namespace HosseinSheikh\QueryFilters;

use HosseinSheikh\QueryFilters\Contracts\Filter;

class MaxCount extends Filter
{
    protected function applyFilters($builder)
    {
        return $builder->take(request($this->filterName()));
    }
}
