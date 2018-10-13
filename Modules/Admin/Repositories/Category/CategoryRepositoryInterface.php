<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 9/29/18
 * Time: 12:12 AM
 */

namespace Modules\Admin\Repositories\Category;


interface CategoryRepositoryInterface
{
    public function list();
    public function findOrFail($id);
    public function create($input);
    public function findOneBy($filter,$fields);
}