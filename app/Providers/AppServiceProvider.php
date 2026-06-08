<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use App\Models\Jadwal;

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
        View::composer('layouts.front', function ($view) {
            $recentBlogs = Jadwal::orderBy('tgl_posting', 'desc')->limit(5)->get();
            $view->with('recentBlogs', $recentBlogs);
        });
    }
}
