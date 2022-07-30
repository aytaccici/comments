<?php

namespace App\Providers;

use App\Contracts\CommentContract;
use App\Contracts\PostContract;
use App\Repositories\CommentRepository;
use App\Repositories\PostRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->app->bind(PostContract::class, PostRepository::class);
        $this->app->bind(CommentContract::class, CommentRepository::class);
    }
}
