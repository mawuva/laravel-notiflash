# Laravel Notiflash

Flexible Flash notifications for Laravel

## Installation

You can install the package via composer:

```bash
composer require mawuekom/laravel-notiflash
```

Once install, go to `config/app.php` to add `NotiflashServiceProvider` in providers array

 Laravel 5.5 and up Uses package auto discovery feature, no need to edit the `config/app.php` file.

 - #### Service Provider

```php
'providers' => [

    ...

    Mawuekom\Notiflash\NotiflashServiceProvider::class,

],
```

- #### Publish Assets

```bash
php artisan vendor:publish --provider="Mawuekom\Notiflash\NotiflashServiceProvider"
```

Or

```bash
php artisan vendor:publish --provider="Mawuekom\Notiflash\NotiflashServiceProvider" --tag="assets"
```

Now that we have published a few new files to our application we need to reload them with the following command:

```bash
composer dump-autoload
```

## Usage

1. Add styles links with `@notiflashCss`
2. Add scripts links with `@notiflashJs`
3. use `notiflash()` helper function inside your controller to set a toast notification for info, success, warning or error
4. Include notiflash partial to your master layout `@include('notiflash::messages')`

NB: You can skip steps 1 and 2 by just add this in your view `@notiflashAssets`

If you are on Laravel 7 or greater, you can use the tag syntax.

```html
<x:notiflash-messages />
```

```php
// Usage description here
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

