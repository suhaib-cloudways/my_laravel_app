<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\ProductRepositoryInterface;
use App\Repository\ProductRepository;
use App\Repository\CommentRepositoryInterface;
use App\Repository\CommentRepository;
use App\Repository\AuthorRepositoryInterface;
use App\Repository\AuthorRepository;
use App\Repository\BookRepositoryInterface;
use App\Repository\BookRepository;

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
        $this->app->bind(AuthorRepositoryInterface::class, AuthorRepository::class);
        $this->app->bind(BookRepositoryInterface::class, BookRepository::class);
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
