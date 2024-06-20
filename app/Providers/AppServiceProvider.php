<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Blog;

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

        View::share(
            'blogEndpoint', 'https://public-api.wordpress.com/rest/v1.1/sites/blogsacode.wordpress.com/posts/'
        );


        

        try {
            // Your super fun database stuff
            view()->share([

                'blogEndpoint' => Blog::where('id', 1)->first(),

            ]);
        } catch (\Exception $e) {
            // do nothing
        }
    }
}
