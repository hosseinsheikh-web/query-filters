<?php

namespace HosseinSheikh\QueryFilters;

use HosseinSheikh\QueryFilters\Contracts\Filter;

class Slug extends Filter
{

    protected function applyFilters($builder)
    {
        $filterName = request($this->filterName());

        return $builder->where('slug', 'like', "%{$filterName}%");
    }
}
