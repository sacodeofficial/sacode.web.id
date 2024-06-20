<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Api;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try {
            view()->share([

                'blogEndpoint' => Api::where('id', 1)->first(),

            ]);
        } catch (\Exception $e) {
            // do nothing
        }
    }
}
