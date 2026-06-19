<?php

namespace App\Providers;

use App\Models\Course;
use App\Models\Setting;
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
        try {
            if (Schema::hasTable('settings')) {
                view()->share('settings', Setting::pluck('value', 'key')->all());
            } else {
                view()->share('settings', []);
            }

            if (Schema::hasTable('courses')) {
                view()->share('globalCourses', Course::select('id', 'name', 'slug', 'is_popular')->get());
            } else {
                view()->share('globalCourses', collect());
            }
        } catch (\Throwable $e) {
            view()->share('settings', []);
            view()->share('globalCourses', collect());
        }
    }
}
