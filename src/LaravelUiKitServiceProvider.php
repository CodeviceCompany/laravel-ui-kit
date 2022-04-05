<?php

namespace CodeviceCompany\LaravelUiKit;

use CodeviceCompany\LaravelUiKit\Commands\LaravelUiKitCommand;
use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
        Blade::component('ui-app', Components\App::class);

        // Buttons
        Blade::component('ui-button', Components\Button\Index::class);
        Blade::component('ui-button.default', Components\Button\DefaultButton::class);
        Blade::component('ui-button.primary', Components\Button\Primary::class);
        Blade::component('ui-button.success', Components\Button\Success::class);
        Blade::component('ui-button.warning', Components\Button\Warning::class);
        Blade::component('ui-button.danger', Components\Button\Danger::class);
        Blade::component('ui-button.dark', Components\Button\Dark::class);

        // Form
        Blade::component('ui-form-group', Components\FormGroup::class);
        Blade::component('ui-input', Components\Input::class);
        Blade::component('ui-select', Components\Select::class);
        Blade::component('ui-textarea', Components\Textarea::class);
        Blade::component('ui-error', Components\Error::class);

        // Layout
        Blade::component('ui-layout.sidebar', Components\Layout\Sidebar\Index::class);
        Blade::component('ui-layout.sidebar.nav', Components\Layout\Sidebar\Nav::class);
        Blade::component('ui-layout.sidebar.header', Components\Layout\Sidebar\Header::class);
        Blade::component('ui-layout.sidebar.notifications', Components\Layout\Sidebar\Notifications::class);
        Blade::component('ui-layout.sidebar.page-heading', Components\Layout\Sidebar\PageHeading::class);
        Blade::component('ui-layout.sidebar.nav-link', Components\Layout\Sidebar\NavLink::class);
        Blade::component('ui-layout.sidebar.profile-dropdown', Components\Layout\Sidebar\ProfileDropdown::class);
    }
}
