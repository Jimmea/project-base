<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 9/29/18
 * Time: 12:12 AM
 */

namespace Modules\Admin\Repositories\Category;


use App\Models\CategoriesMulti;
use App\Repositories\Abstracts\FilterBuilder;
use App\Repositories\BaseRepositoryV2;
use App\Repositories\RecursiveMenu;

class CategoryRepository extends BaseRepositoryV2 implements CategoryRepositoryInterface
{
    use FilterBuilder;
    use RecursiveMenu;

    protected $model;

    public function __construct(CategoriesMulti $category)
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

    public function getAllCategory($fields = ['*'], $parent_id= 0, $filters = [])
    {
        $categories = $this->getAllChild($this->model->getTable(), 'id', 'cat_parent_id', $parent_id, $filters, $fields);
        return $categories;
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

    /**
     * Update category có con hay không và có tất cả các category nào
     * @param $cat_parent_id
     * @param $cat_id
     * @return mixed
     */
    public function updateCategoryHasChild($cat_parent_id = 0, $cat_id, $action = '')
    {
        if ($cat_parent_id < 1) return ;
        $category  = $this->findById($cat_parent_id);
        $cateAllChild   = $category->cat_all_child ? explode(',', $category->cat_all_child) : array();
        if ($action == 'remove' && $cateAllChild)
        {
            foreach ($cateAllChild as $key => $cate)
            {
                if ($cat_id == $cate)
                {
                    unset($cateAllChild[$key]);
                    break;
                }
            }
        }else
        {
            $cateAllChild[] = $cat_id;
        }

        $cateAllChild   = array_unique($cateAllChild);
        $data = [
            'cat_has_child' => count($cateAllChild) ? 1 : 0,
            'cat_all_child' => implode(',', $cateAllChild)
        ];
        return $category->fill($data)->save();
    }

    public function create($attribute=[])
    {
        return $this->storeData($attribute);
    }

}