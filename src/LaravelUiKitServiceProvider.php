<?php

namespace CodeviceCompany\LaravelUiKit;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use CodeviceCompany\LaravelUiKit\Commands\LaravelUiKitCommand;

class LaravelUiKitServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-ui-kit')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-ui-kit_table')
            ->hasCommand(LaravelUiKitCommand::class);
    }
}
