<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 9/29/18
 * Time: 12:18 AM
 */

namespace App\Repositories\Abstracts;


trait FilterBuilder
{
    public function whereAndMany($model, $filter)
    {
        return $model->where(function($q) use ($filter) {
            if (!empty($filter))
            {
                $fillable = $this->model->getFillable();

                foreach ($filter as $f)
                {
                    list($col, $ope, $val) = $f;
                    if (in_array($col, $fillable))
                    {
                        $q->where($col, $ope, $val);
                    }
                }
            }
        });
    }

    public function sort($model, $sort = [])
    {
        list($col, $direction) = $sort;
        return $model->orderBy($col, $direction);
    }

}