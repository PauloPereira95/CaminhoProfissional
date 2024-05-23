<?php

namespace App\Providers;

use Statamic\Statamic;
use Spatie\Flash\Flash;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadViewsFrom(resource_path('views/vendor/notifications'), 'email');
        Flash::levels([
            'success' => 'bg-green-600 text-white p-2',
            'error' => 'bg-red-800 text-white p-2',
        ]);
        // this would probably go in a service provider


        // Statamic::vite('app', [
        //     'resources/js/cp.js',
        //     'resources/css/cp.css',
        // ]);
    }
}
