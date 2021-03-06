<?php

namespace App\Applications\Api\V1\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class ApiV1ServiceProvider extends ServiceProvider
{
    /**
     * Override default laravel application controller namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Applications\Api\V1\Http\Controllers';

    /**
     * Boot API routes.
     */
    public function boot()
    {
        \Route::prefix('api/v1')
            ->namespace($this->namespace)
            ->group(base_path('app/Applications/Api/V1/Http/routes.php'));
    }
}
