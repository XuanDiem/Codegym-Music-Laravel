<?php

namespace App\Providers;

use App\Repository\impl\MusicRepository;
use App\Repository\impl\PlaylistRepository;
use App\Repository\impl\SingerRepository;
use App\Repository\impl\UserRepository;
use App\Repository\MusicRepositoryInterface;
use App\Repository\PlaylistRepositoryInterface;
use App\Repository\SingerRepositoryInterface;
use App\Repository\UserRepositoryInterface;
use App\Service\impl\MusicService;
use App\Service\impl\MusicServiceInterface;
use App\Service\impl\PlaylistService;
use App\Service\impl\SingerService;
use App\Service\impl\UserService;
use App\Service\PlaylistServiceInterface;
use App\Service\SingerServiceInterface;
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
        $this->app->singleton(PlaylistServiceInterface::class, PlaylistService::class);
        $this->app->singleton(PlaylistRepositoryInterface::class, PlaylistRepository::class);
        $this->app->singleton(SingerServiceInterface::class, SingerService::class);
        $this->app->singleton(SingerRepositoryInterface::class, SingerRepository::class);
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
