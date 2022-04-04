<?php

namespace CodeviceCompany\LaravelUiKit\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CodeviceCompany\LaravelUiKit\LaravelUiKit
 */
class LaravelUiKit extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-ui-kit';
    }
}
