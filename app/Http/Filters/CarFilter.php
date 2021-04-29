<?php

namespace App\Http\Filters;

class CarFilter extends BaseFilters
{
    /**
     * Registered filters to operate upon.
     *
     * @var array
     */
    protected $filters = [
        'name',
        'trem',
        'selected_id',
        'category_id',
        'manufactory_id',
        'minimum',
        'maximum',
    ];
    /**
     * Filter the query by a given name.
     *
     * @param string|int $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function name($value)
    {
        if ($value) {
            return $this->builder->whereTranslationLike('name', "%$value%");
        }

        return $this->builder;
    }

    /**
     * Filter the query by a given minimum.
     *
     * @param string|int $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function minimum($value)
    {
        if ($value) {
            return $this->builder->where('price1' ,">=", $value);
        }

        return $this->builder;
    }

    /**
     * Filter the query by a given maximum.
     *
     * @param string|int $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function maximum($value)
    {
        if ($value) {
            return $this->builder->where('price1' ,"<=", $value);
        }

        return $this->builder;
    }

    /**
     * Filter the query by a given trem.
     *
     * @param string|int $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function trem($value)
    {
        if ($value) {
            return $this->builder->whereTranslationLike('name', "%$value%")->orWhere('model','like', "%$value%")->orWhereHas('category' ,function($q) use($value){
                $q->whereTranslationLike('name', "%$value%");
            })->orWhereHas('manufactory' ,function($q) use($value){
                $q->whereTranslationLike('name', "%$value%");
            });
        }

        return $this->builder;
    }


    /**
     * Filter the query by a given category_id.
     *
     * @param string|int $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function categoryId($value)
    {
        if ($value) {
            return $this->builder->where('category_id', $value);
        }

        return $this->builder;
    }

    /**
     * Filter the query by a given manufactory_id.
     *
     * @param string|int $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function manufactoryId($value)
    {
        if ($value) {
            return $this->builder->where('manufactory_id', $value);
        }

        return $this->builder;
    }

    /**
     * Sorting results by the given id.
     *
     * @param $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function selectedId($value)
    {
        if ($value) {
            $this->builder->sortingByIds($value);
        }

        return $this->builder;
    }
}
