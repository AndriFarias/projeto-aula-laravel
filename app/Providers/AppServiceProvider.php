<?php

namespace App\Providers;

use App\View\Components\forms\Button;
use App\View\Components\forms\ButtonEditar;
use App\View\Components\Forms\Input;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Blade::component('input', Input::class);
        Blade::component('button', Button::class);
        Blade::component('button-editar', ButtonEditar::class);
        
    }
}
