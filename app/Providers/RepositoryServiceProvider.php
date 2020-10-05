<?php

namespace App\Providers;

use App\Repository\Eloquent\MessageReplyRepository;
use App\Repository\Eloquent\MessageRepository;
use App\Repository\MessageReplyRepositoryInterface;
use App\Repository\MessageRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MessageRepositoryInterface::class, MessageRepository::class);
        $this->app->bind(MessageReplyRepositoryInterface::class, MessageReplyRepository::class);
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
