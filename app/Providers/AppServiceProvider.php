<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Jadwal;
use App\Models\Kegiatan;

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
            $recentJadwals = Jadwal::orderBy('tgl_posting', 'desc')->limit(3)->get();
            $footerKegiatans = Kegiatan::latest()->limit(5)->get();
            $view->with(compact('recentJadwals', 'footerKegiatans'));
        });
    }
}
