<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 9/28/18
 * Time: 10:33 PM
 */

namespace App\Providers;


use Modules\Admin\Repositories\Attribute\AttributeRepository;
use Modules\Admin\Repositories\Attribute\AttributeRepositoryInterface;
use Modules\Admin\Repositories\AttributeValue\AttributeValueRepository;
use Modules\Admin\Repositories\AttributeValue\AttributeValueRepositoryInterface;
use Modules\Admin\Repositories\Category\CategoryRepository;
use Modules\Admin\Repositories\Category\CategoryRepositoryInterface;
use Modules\Admin\Repositories\Department\DepartmentRepository;
use Modules\Admin\Repositories\Department\DepartmentRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use Modules\Admin\Repositories\Product\ProductRepository;
use Modules\Admin\Repositories\Product\ProductRepositoryInterface;

class RepositoryBackendProvider extends ServiceProvider
{
    protected $defer = false;

    public function register()
    {
        $this->app->bind(DepartmentRepositoryInterface::class, DepartmentRepository::class);

        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);

        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);

        $this->app->bind(AttributeRepositoryInterface::class, AttributeRepository::class);

        $this->app->bind(AttributeValueRepositoryInterface::class, AttributeValueRepository::class);

        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
    }

    public function boot()
    {

    }
}