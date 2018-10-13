<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 9/28/18
 * Time: 12:26 AM
 */

namespace Modules\Admin\Repositories\Department;


use App\Models\Department;
use App\Repositories\Abstracts\FilterBuilder;

class DepartmentRepository implements DepartmentRepositoryInterface
{
    use FilterBuilder;

    protected $model;

    public function __construct(Department $model)
    {
        $this->model = $model;
    }

    public function list($filter = [], $sort = [], $limit = 20)
    {
        $mDepartment = $this->whereAndMany($this->model, $filter);

        if ($sort)
        {
            $mDepartment = $this->sort($mDepartment, $sort);
        }

        return $mDepartment->paginate($limit);
    }

    public function findOrFail($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create($data = array())
    {
        $department = $this->model->create($data);
        return $department;
    }

    public function update($id, $data = [])
    {
        $this->model->update($id, $data);
        return true;
    }

    public function destroy($id)
    {
        $count = $this->model->destroy($id);
        return $count;
    }
}