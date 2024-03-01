<?php

namespace Uasoft\Badaso\Theme\ComfreeTheme\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Uasoft\Badaso\Theme\ComfreeTheme\Commands\ComfreeThemeSetup;
use Uasoft\Badaso\Theme\ComfreeTheme\Facades\ComfreeTheme as FacadesComfreeTheme;
use Uasoft\Badaso\Theme\ComfreeTheme\ComfreeTheme;

class ComfreeThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $loader = AliasLoader::getInstance();
        $loader->alias('ComfreeTheme', FacadesComfreeTheme::class);

        $this->app->singleton('badaso-comfree-theme', function () {
            return new ComfreeTheme();
        });

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'badaso-comfree');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'comfree-theme');
        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');


        $this->publishes([
            __DIR__.'/../Seeder'                       => database_path('seeders/Badaso/Commerce/Theme/ComfreeTheme'),
            __DIR__.'/../Config/badaso-comfree-theme.php' => config_path('badaso-comfree-theme.php'),
            __DIR__.'/../Images/comfree-img/' => storage_path('app/public/photos/1'),
            __DIR__.'/../resources/customization/'     => resource_path('js/badaso/theme/comfree-theme/'),
            __DIR__ . '/../Tailwind/'                      => base_path(),
        ], 'BadasoComfreeTheme');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/uasoft-indonesia/comfree-theme'),
        ], 'BadasoComfreeThemeViews');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConsoleCommands();
    }

    /**
     * Register the commands accessible from the Console.
     */
    private function registerConsoleCommands()
    {
        $this->commands(ComfreeThemeSetup::class);
    }
}
