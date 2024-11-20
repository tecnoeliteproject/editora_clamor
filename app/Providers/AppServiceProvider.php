<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use App\Filament\Resources\ServicoResource;

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
        Model::unguard();
    }

    public function registerPages(): void
    {
        $this->pages([
            UserReport::class,
        ]);
    }

    public function boots(): void
{
    Filament::registerResources([
        ServicoResource::class,
    ]);
}
}

