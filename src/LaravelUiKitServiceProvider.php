<?php

namespace CodeviceCompany\LaravelUiKit;

use CodeviceCompany\LaravelUiKit\Components\App;
use CodeviceCompany\LaravelUiKit\Components\Button\Danger;
use CodeviceCompany\LaravelUiKit\Components\Button\Dark;
use CodeviceCompany\LaravelUiKit\Components\Button\DefaultButton;
use CodeviceCompany\LaravelUiKit\Components\Button\Index;
use CodeviceCompany\LaravelUiKit\Components\Button\Primary;
use CodeviceCompany\LaravelUiKit\Components\Button\Success;
use CodeviceCompany\LaravelUiKit\Components\Button\Warning;
use CodeviceCompany\LaravelUiKit\Components\FormGroup;
use CodeviceCompany\LaravelUiKit\Components\Input;
use CodeviceCompany\LaravelUiKit\Components\Select;
use CodeviceCompany\LaravelUiKit\Components\ShortToggle;
use CodeviceCompany\LaravelUiKit\Components\Textarea;
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

        $this->loadBladeComponents();
    }

    public function loadBladeComponents(): void
    {

        // General
        Blade::component('ui-app', App::class);

        // Buttons
        Blade::component('ui-button', Index::class);
        Blade::component('ui-button.default', DefaultButton::class);
        Blade::component('ui-button.primary', Primary::class);
        Blade::component('ui-button.success', Success::class);
        Blade::component('ui-button.warning', Warning::class);
        Blade::component('ui-button.danger', Danger::class);
        Blade::component('ui-button.dark', Dark::class);

        // Form
        Blade::component('ui-form-group', FormGroup::class);
        Blade::component('ui-input', Input::class);
        Blade::component('ui-select', Select::class);
        Blade::component('ui-textarea', Textarea::class);
    }
}
