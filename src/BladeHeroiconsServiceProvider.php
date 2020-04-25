<?php

declare(strict_types=1);

namespace BladeUI\Heroicons;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

final class BladeHeroiconsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->make(Factory::class)->add('heroicons', [
            'path' => __DIR__ . '/../resources/svg',
            'component-prefix' => 'heroicon',
        ]);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/svg' => public_path('vendor/blade-heroicons'),
            ], 'blade-heroicons');
        }
    }
}
