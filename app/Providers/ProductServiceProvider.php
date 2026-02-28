<?php

namespace App\Providers;

use Carbon\Laravel\ServiceProvider;
use App\Services\ProductService;


class ProductServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(ProductService::class, function ($app) {
            $products = [
                [
                    'id' => 1,
                    'name' => 'Apple',
                    'category' => 'Fruits'
                ],
                [
                    'id' => 2,
                    'name' => 'Potato',
                    'category' => 'Vegetable'
                ],
            ];
               return new ProductService($products); 


        });
    }
}