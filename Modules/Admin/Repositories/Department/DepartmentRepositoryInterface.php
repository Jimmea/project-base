<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 9/28/18
 * Time: 12:25 AM
 */

namespace Modules\Admin\Repositories\Department;


interface DepartmentRepositoryInterface
{
    public function list();
    public function findOrFail($id);
    public function create($input);
    public function destroy($id);
}