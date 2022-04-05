[![Latest Version on Packagist](https://img.shields.io/packagist/v/codevicecompany/laravel-ui-kit.svg?style=flat-square)](https://packagist.org/packages/codevicecompany/laravel-ui-kit)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/codevicecompany/laravel-ui-kit/run-tests?label=tests)](https://github.com/codevicecompany/laravel-ui-kit/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/codevicecompany/laravel-ui-kit/Check%20&%20fix%20styling?label=code%20style)](https://github.com/codevicecompany/laravel-ui-kit/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/codevicecompany/laravel-ui-kit.svg?style=flat-square)](https://packagist.org/packages/codevicecompany/laravel-ui-kit)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require codevicecompany/laravel-ui-kit
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-ui-kit-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-ui-kit-views"
```

## Usage

```html

<x-ui-app title="Page title">
    {{-- Your content here --}}
</x-ui-app>
```

### Buttons

```html

<x-ui-button icon="heroicon-o-user" href="#" hide-text-on-mobile>Click Me</x-ui-button>
<x-ui-button.default>Click Me</x-ui-button.default>
<x-ui-button.primary>Click Me</x-ui-button.primary>
<x-ui-button.success>Click Me</x-ui-button.success>
<x-ui-button.warning>Click Me</x-ui-button.warning>
<x-ui-button.danger>Click Me</x-ui-button.danger>
<x-ui-button.dark>Click Me</x-ui-button.dark>
```

### Forms

The form wrapper

```html
<x-ui-form-group
    name="website"
    label="Website"
    suffix=".com"
    prefix="www."
    prefixClass="class"
    hint="Hint"
    required
    bag="default"
    for="id"
>
    {{-- x-ui-input / x-ui-textarea / x-ui-select --}}
</x-ui-form-group>
```

```html

<ui-input bag="bag" />

<ui-select bag="bag">
    <option value=""></option>
</ui-select>

<ui-textarea bag="bag">{{-- text --}}</ui-textarea>
```

## Testing

```bash
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
