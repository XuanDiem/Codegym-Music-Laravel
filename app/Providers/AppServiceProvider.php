<?php

namespace App\Providers;

use App\Repository\impl\MusicRepository;
use App\Repository\impl\UserRepository;
use App\Repository\MusicRepositoryInterface;
use App\Repository\UserRepositoryInterface;
use App\Service\impl\MusicService;
use App\Service\impl\MusicServiceInterface;
use App\Service\impl\UserService;
use App\Service\UserServiceInterface;
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
        $this->app->singleton(MusicServiceInterface::class, MusicService::class);
        $this->app->singleton(MusicRepositoryInterface::class, MusicRepository::class);
        $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);
        $this->app->singleton(UserServiceInterface::class, UserService::class);
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
