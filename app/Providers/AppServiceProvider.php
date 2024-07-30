<?php

namespace App\Providers;

use A17\Twill\Facades\TwillAppSettings;
use A17\Twill\Facades\TwillNavigation;
use A17\Twill\Services\Settings\SettingsGroup;
use A17\Twill\View\Components\Navigation\NavigationLink;
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
        TwillNavigation::addLink(
            NavigationLink::make()->forSingleton('homepage')
        );

        TwillNavigation::addLink(
            NavigationLink::make()->forSingleton('about')
        );

        TwillNavigation::addLink(
            NavigationLink::make()->forModule('services')
        );

        TwillNavigation::addLink(
            NavigationLink::make()->forModule('pages')
        );

        TwillNavigation::addLink(
            NavigationLink::make()->forModule('blogs')
        );


        TwillAppSettings::registerSettingsGroup(
            SettingsGroup::make()
                ->name('seo')
                ->label('Seo'),
        );

        TwillAppSettings::registerSettingsGroup(
            SettingsGroup::make()
                ->name('contact')
                ->label('Contact'),
        );

    }
}
