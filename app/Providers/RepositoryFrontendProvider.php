<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 9/28/18
 * Time: 10:31 PM
 */

namespace App\Providers;


use App\Repositories\Frontend\Product\ProductRepository;
use App\Repositories\Frontend\Product\ProductRepositoryInterface;
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