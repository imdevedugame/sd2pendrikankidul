<?php

namespace App\Providers;

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
        try {
            $schoolProfile = \App\Models\SchoolProfile::first();
            $pengumumanLinks = \App\Models\MenuLink::where('type', 'pengumuman')->where('is_active', true)->orderBy('order')->get();
            $ppdbLinks = \App\Models\MenuLink::where('type', 'ppdb')->where('is_active', true)->orderBy('order')->get();
            $sosmedLinks = \App\Models\MenuLink::where('type', 'sosmed')->where('is_active', true)->orderBy('order')->get();
            
            \Illuminate\Support\Facades\View::share('schoolProfile', $schoolProfile);
            \Illuminate\Support\Facades\View::share('pengumumanLinks', $pengumumanLinks);
            \Illuminate\Support\Facades\View::share('ppdbLinks', $ppdbLinks);
            \Illuminate\Support\Facades\View::share('sosmedLinks', $sosmedLinks);
        } catch (\Exception $e) {
            // Ignore if tables don't exist yet
        }
    }
}
