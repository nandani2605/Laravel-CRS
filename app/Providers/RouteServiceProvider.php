<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    protected $namespace = 'App\Http\Controllers';

    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }

    public function map()
    {

        $this->mapAdminRoutes();

    }
    protected function mapAdminRoutes()
    {
        Route::prefix('admin')
            ->namespace($this->namespace)
            ->group(base_path('routes/admin.php'));
    }
}
