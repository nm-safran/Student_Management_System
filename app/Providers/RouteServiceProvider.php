<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    // ...existing code...

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        // ...existing code...

        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));

        Route::middleware(['web', 'auth', 'role:admin'])
            ->namespace($this->namespace)
            ->prefix('admin')
            ->group(base_path('routes/admin.php'));

        Route::middleware(['web', 'auth', 'role:student'])
            ->namespace($this->namespace)
            ->prefix('student')
            ->group(base_path('routes/student.php'));
    }
}
