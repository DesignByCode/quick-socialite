<?php

namespace DesignByCode\QuickSocialite\Providers;

use DesignByCode\QuickSocialite\Http\Middleware\Social;
use DesignByCode\QuickSocialite\Models\UserSocial;
use DesignByCode\QuickSocialite\Observers\UserSocialObserver;
use DesignByCode\QuickSocialite\RouteMethods\SocialRoutes;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class QuickSocialiteServiceProvider extends ServiceProvider
{

    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function register()
    {
        $this->app->register(EventServiceProvider::class);

        $router = $this->app->make(Router::class);

        $router->aliasMiddleware(Social::class, 'social');

        $this->mergeConfigFrom(__DIR__ . '/../../config/services.php', 'services');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Route::mixin(new SocialRoutes);

        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');

        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'quick-socialite');



        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../config/social.php' => config_path('social.php'),
            ], 'quick-socialite-config');

            $this->publishes([
                __DIR__ . '/../../resources/views' => resource_path('views/vendor/quick-socialite')
            ], 'quick-socialite-views');

        }

        UserSocial::observe(UserSocialObserver::class);


    }
}
