<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 10/9/18
 * Time: 11:56 PM
 */

namespace Modules\Admin\Repositories\AttributeValue;


use App\Models\AttributeValue;
use App\Repositories\Abstracts\FilterBuilder;

class AttributeValueRepository implements AttributeValueRepositoryInterface
{
    use FilterBuilder;

    private $model;

    public function __construct(AttributeValue $attributeValue)
    {
        $this->model = $attributeValue;
    }

    // TODO: Implement list() method.
    public function list($filter = [], $order = [], $limit = 20)
    {
            $mQuery = $this->model->whereRaw('1=1');
            $mQuery = $this->whereAndMany($mQuery, $filter);
            $data   = $mQuery->paginate($limit);

            return $data;
    }
}