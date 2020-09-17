<?php

namespace Torrix;

use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class LaravelUikitServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if (class_exists(Fortify::class)) {
            Fortify::loginView(fn() => view('laravel-uikit::auth.login'));
            Fortify::registerView(fn() => view('laravel-uikit::auth.register'));
            Fortify::requestPasswordResetLinkView(fn() => view('laravel-uikit::auth.forgot-password'));
            Fortify::resetPasswordView(fn() => view('laravel-uikit::auth.reset-password'));
            Fortify::verifyEmailView(fn() => view('laravel-uikit::auth.verify-email'));
        }

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laravel-uikit');

        $this->publishes(
            [
                __DIR__ . '/../webpack.mix.js'                    => 'webpack.mix.js',
                __DIR__ . '/../resources/js'                      => resource_path('js'),
                __DIR__ . '/../resources/sass'                    => resource_path('sass'),
                __DIR__ . '/../resources/views/welcome.blade.php' => resource_path('views/welcome.blade.php'),
                __DIR__ . '/../resources/views/layouts'           => resource_path('views/layouts'),
            ]
        );
    }
}
