<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 10/9/18
 * Time: 11:31 PM
 */

namespace Modules\Admin\Repositories\Attribute;


use App\Models\Attribute;

class AttributeRepository implements AttributeRepositoryInterface
{
    private $model;

    public function __construct(Attribute $attribute)
    {
        $this->model  = $attribute;
    }

    public function list($filter = [], $sort = [], $limit = 20)
    {
        // TODO: Implement list() method.
        return $this->model->paginate($limit);
    }

    public function add($data)
    {
        // TODO: Implement add() method.
    }

    public function update($id, $data)
    {
        // TODO: Implement update() method.
    }

    public function findOne($id)
    {
        // TODO: Implement findOne() method.
    }


}