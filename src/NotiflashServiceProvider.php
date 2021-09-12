<?php

namespace Mawuekom\Notiflash;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Mawuekom\Notiflash\Notiflash;
use Mawuekom\Notiflash\View\Components\NotiflashComponent;

class NotiflashServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        require_once __DIR__.'/helpers.php';

        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'notiflash');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'notiflash');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        $this ->registerBladeDirective();
        $this->registerComponents();

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/notiflash.php' => config_path('notiflash.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/notiflash'),
            ], 'views');*/

            // Publishing assets.
            $this->publishes([
                __DIR__.'/../public' => public_path('vendor/notiflash'),
            ], 'assets');

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/notiflash'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/notiflash.php', 'notiflash');

        // Register the main class to use with the facade
        $this->app->singleton('notiflash', function ($app) {
            return $app->make(Notiflash::class);
        });
    }

    public function registerComponents(): void
    {
        Blade::component(NotiflashComponent::class, 'notiflash-messages');
    }

    public function registerBladeDirective(): void
    {
        Blade::directive('notiflashCss', function () {
            return '<?php echo notiflashCss(); ?>';
        });

        Blade::directive('notiflashJs', function () {
            return '<?php echo notiflashJs(); echo bulmaToast(); ?>';
        });

        Blade::directive('notiflashAssets', function () {
            return '<?php echo notiflashCss(); echo notiflashJs(); echo bulmaToast(); ?>';
        });
    }
}
