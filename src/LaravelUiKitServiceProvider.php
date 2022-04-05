<?php

namespace CodeviceCompany\LaravelUiKit;

use CodeviceCompany\LaravelUiKit\Commands\LaravelUiKitCommand;
use Illuminate\View\Compilers\BladeCompiler;
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
        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {
            // General
            $blade->component('ui-app', Components\App::class);

            // Buttons
            $blade->component('ui-button', Components\Button\Index::class);
            $blade->component('ui-button.default', Components\Button\DefaultButton::class);
            $blade->component('ui-button.primary', Components\Button\Primary::class);
            $blade->component('ui-button.success', Components\Button\Success::class);
            $blade->component('ui-button.warning', Components\Button\Warning::class);
            $blade->component('ui-button.danger', Components\Button\Danger::class);
            $blade->component('ui-button.dark', Components\Button\Dark::class);

            // Form
            $blade->component('ui-form-group', Components\FormGroup::class);
            $blade->component('ui-input', Components\Input::class);
            $blade->component('ui-select', Components\Select::class);
            $blade->component('ui-textarea', Components\Textarea::class);
            $blade->component('ui-error', Components\Error::class);

            // Layout - Sidebar
            $blade->component('ui-layout.sidebar', Components\Layout\Sidebar\Index::class);
            $blade->component('ui-layout.sidebar.nav', Components\Layout\Sidebar\Nav::class);
            $blade->component('ui-layout.sidebar.header', Components\Layout\Sidebar\Header::class);
            $blade->component('ui-layout.sidebar.notifications', Components\Layout\Sidebar\Notifications::class);
            $blade->component('ui-layout.sidebar.page-heading', Components\Layout\Sidebar\PageHeading::class);
            $blade->component('ui-layout.sidebar.nav-link', Components\Layout\Sidebar\NavLink::class);
            $blade->component('ui-layout.sidebar.profile-dropdown', Components\Layout\Sidebar\ProfileDropdown::class);

            // Table
            $blade->component('ui-table', Components\Table\Index::class);
        });
    }
}
