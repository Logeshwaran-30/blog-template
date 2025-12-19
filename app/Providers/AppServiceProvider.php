<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        // Prevent DB queries while running artisan commands (migrate, cache, etc.)
        if (app()->runningInConsole()) {
            return;
        }

        // Share categories only if table exists
        if (Schema::hasTable('categories')) {
            View::share('categories', Category::all());
        }
    }
}
