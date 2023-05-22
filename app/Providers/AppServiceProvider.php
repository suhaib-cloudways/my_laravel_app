<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\ProductRepositoryInterface;
use App\Repository\ProductRepository;
use App\Repository\CommentRepositoryInterface;
use App\Repository\CommentRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(CommentRepositoryInterface::class, CommentRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
