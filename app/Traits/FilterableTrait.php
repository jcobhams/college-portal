<?php

namespace App\Traits;

use App\Filters\BaseFilters;
use Illuminate\Database\Eloquent\Builder;

trait FilterableTrait
{
    /**
     * Applies filters to the scoped query
     *
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function scopeFilter($query, BaseFilters $filters)
    {
        return $filters->apply($query);
    }
}