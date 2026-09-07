<?php

namespace App\Providers;

use App\Models\SiteInfo;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
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
        View::composer('*', function ($view) {
        $settings = SiteInfo::first() ?? new SiteInfo();
        $view->with('settings', $settings);
    });
    FileUpload::configureUsing(function (FileUpload $component): void {
        $component->disk('public')->visibility('public');
    });
    }
}
