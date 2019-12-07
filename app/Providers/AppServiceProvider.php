<?php

namespace App\Providers;

use App\Repository\impl\MusicRepository;
use App\Repository\MusicRepositoryInterface;
use App\Service\impl\MusicService;
use App\Service\MusicServiceInterface;
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
