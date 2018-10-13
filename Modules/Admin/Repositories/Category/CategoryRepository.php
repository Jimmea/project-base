<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 9/29/18
 * Time: 12:12 AM
 */

namespace Modules\Admin\Repositories\Category;


use App\Models\Category;
use App\Repositories\Abstracts\FilterBuilder;

class CategoryRepository implements CategoryRepositoryInterface
{
    use FilterBuilder;
    protected $model;

    public function __construct(Category $category)
    {
        $this->model = $category;
    }

    public function list($filter = [], $sort = [], $limit = 10)
    {
        $mCategory = $this->whereAndMany($this->model, $filter);


        // TODO: Implement list() method.
        if ($sort)
        {
            $mCategory = $this->sort($mCategory, $sort);
        }

        return $mCategory->paginate($limit);
    }

    public function findOrFail($id)
    {
        // TODO: Implement findOrFail() method.

        $category = $this->model->find($id);
        return $category;
    }

    public function findOneBy($filter = [], $fields = ['*'])
    {
        list($column, $ope, $value) = $filter;
        $fillable = $this->model->getFillable();
        if (in_array($column, $fillable))
        {
            $item = $this->model->where($column, $ope, $value)->first($fields);
            return $item;
        }

        return 0;
    }

    public function create($input)
    {
        // TODO: Implement create() method.
    }

}