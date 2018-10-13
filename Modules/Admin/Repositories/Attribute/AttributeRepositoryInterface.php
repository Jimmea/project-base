<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 10/9/18
 * Time: 11:30 PM
 */

namespace Modules\Admin\Repositories\Attribute;


interface AttributeRepositoryInterface
{
    public function list($filter, $sort, $limit);
    public function add($data);
    public function update($id, $data);
    public function findOne($id);
}