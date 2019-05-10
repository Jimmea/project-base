<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 9/28/18
 * Time: 10:31 PM
 */

namespace App\Providers;


use Modules\Shop\Repositories\Product\ProductRepository;
use Modules\Shop\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryFrontendProvider extends ServiceProvider
{

    protected $defer = false;

    public function register()
    {
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
    }

    public function boot()
    {

    }
}