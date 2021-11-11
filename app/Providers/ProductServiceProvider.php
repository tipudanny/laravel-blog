<?php

namespace App\Providers;

use App\Contracts\ProductInterface;
use App\Repositories\CachedProductRepository;
use App\Repositories\ProductRepository;
use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductInterface::class, function () {
            if ($this->app->environment('local')) {
                return new ProductRepository;
            }
            return new CachedProductRepository;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
