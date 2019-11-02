<?php

namespace App\Providers;

use App\Http\Repositories\Eloquent\GroupRepository;
use App\Http\Repositories\Eloquent\UserUserRepository;
use App\Http\Repositories\GroupRepositoryInterface;
use App\Http\Repositories\UserRepositoryInterface;
use App\Http\Services\Implement\GroupService;
use App\Http\Services\Implement\GroupServiceInterface;
use App\Http\Services\Implement\UserService;
use App\Http\Services\UserServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(UserRepositoryInterface::class,
            UserUserRepository::class);

        $this->app->singleton(UserServiceInterface::class,
            UserService::class);
        $this->app->singleton(GroupRepositoryInterface::class, GroupRepository::class);
        $this->app->singleton(GroupServiceInterface::class, GroupService::class);
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
