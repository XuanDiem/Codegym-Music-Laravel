<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiAdminRoutes();

        $this->mapWebAdminRoutes();

        $this->mapWebUserRoutes();

        $this->mapApiUserRoutes();

        $this->mapAuthRoutes();
        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebAdminRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace . '\Admin')
            ->group(base_path('routes/admin/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiAdminRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace . '\Admin')
            ->group(base_path('routes/admin/api.php'));
    }

    protected function mapWebUserRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace . '\User')
            ->group(base_path('routes/user/web.php'));
    }

    protected function mapApiUserRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace . '\User')
            ->group(base_path('routes/user/api.php'));
    }

    protected function mapAuthRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/auth.php'));
    }
}
