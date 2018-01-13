<?php namespace Bantenprov\TaskProfile;

use Illuminate\Support\ServiceProvider;
use Bantenprov\TaskProfile\Console\Commands\TaskProfileCommand;

/**
 * The TaskProfileServiceProvider class
 *
 * @package Bantenprov\TaskProfile
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TaskProfileServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Bootstrap handles
        //$this->routeHandle();
        $this->configHandle();
        $this->langHandle();
        $this->viewHandle();
        $this->assetHandle();
        $this->pulishControllerStub();
        //$this->migrationHandle();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('task-profile', function ($app) {
            return new TaskProfile;
        });

        $this->app->singleton('command.task-profile', function ($app) {
            return new TaskProfileCommand;
        });

        $this->commands('command.task-profile');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'task-profile',
            'command.task-profile',
        ];
    }

    /**
     * Loading package routes
     *
     * @return void
     */
    protected function routeHandle()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    }

    /**
     * Loading and publishing package's config
     *
     * @return void
     */
    protected function configHandle()
    {
        $packageConfigPath = __DIR__.'/config/config.php';
        $appConfigPath     = config_path('task-profile.php');

        $this->mergeConfigFrom($packageConfigPath, 'task-profile');

        $this->publishes([
            $packageConfigPath => $appConfigPath,
        ], 'config');
    }

    /**
     * Loading and publishing package's translations
     *
     * @return void
     */
    protected function langHandle()
    {
        $packageTranslationsPath = __DIR__.'/resources/lang';

        $this->loadTranslationsFrom($packageTranslationsPath, 'task-profile');

        $this->publishes([
            $packageTranslationsPath => resource_path('lang/vendor/task-profile'),
        ], 'lang');
    }

    /**
     * Loading and publishing package's views
     *
     * @return void
     */
    protected function viewHandle()
    {
        $packageViewsPath = __DIR__.'/resources/views';

        //$this->loadViewsFrom($packageViewsPath, 'task-profile');

        $this->publishes([
            $packageViewsPath => resource_path('views/'),
        ], 'profile-views');
    }

    /**
     * Publishing package's assets (JavaScript, CSS, images...)
     *
     * @return void
     */
    protected function assetHandle()
    {
        $packageAssetsPath = __DIR__.'/resources/assets';

        $this->publishes([
            $packageAssetsPath => public_path('vendor/task-profile'),
        ], 'public');
    }

    /**
     * Publishing package's migrations
     *
     * @return void
     */
    protected function migrationHandle()
    {
        $packageMigrationsPath = __DIR__.'/database/migrations';

        $this->loadMigrationsFrom($packageMigrationsPath);

        $this->publishes([
            $packageMigrationsPath => database_path('migrations')
        ], 'migrations');
    }

    public function pulishControllerStub()
    {                     

        $this->publishes([
            File::put(base_path('app/Http/Controllers/UserProfileController.php'),File::get(__DIR__.'/stubs/controllers/TaskProfileController.stub'))
        ], 'profil-controller');
        
    }
}
