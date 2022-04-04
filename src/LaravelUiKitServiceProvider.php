<?php

namespace CodeviceCompany\LaravelUiKit;

use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use CodeviceCompany\LaravelUiKit\Commands\LaravelUiKitCommand;

class LaravelUiKitServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('ui-kit')
            ->hasConfigFile()
            ->hasViews('ui-kit')
            ->hasCommand(LaravelUiKitCommand::class);

        Blade::componentNamespace('CodeviceCompany\\LaravelUiKit\\Components', 'ui-kit');
    }
}
