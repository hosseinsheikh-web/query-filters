<?php

namespace HosseinSheikh\QueryFilters;

use HosseinSheikh\QueryFilters\Contracts\Filter;

class Name extends Filter
{
    /**
     * @param $builder
     * @return mixed
     */
    protected function applyFilters($builder)
    {
        $filterName = request($this->filterName());

        return $builder->where('name', 'like', "%{$filterName}%");
    }
}
