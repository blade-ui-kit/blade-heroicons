<p align="center">
    <img src="https://github.com/driesvints/blade-heroicons/blob/main/art/socialcard-blade-heroicons.png" width="1280" title="Social Card Blade UI Kit">
</p>

# Blade Heroicons

<a href="https://github.com/driesvints/blade-heroicons/actions?query=workflow%3ATests">
    <img src="https://github.com/driesvints/blade-heroicons/workflows/Tests/badge.svg" alt="Tests">
</a>
<a href="https://github.com/driesvints/blade-heroicons/actions/workflows/coding-standards.yml">
    <img src="https://github.com/driesvints/blade-heroicons/actions/workflows/coding-standards.yml/badge.svg" alt="Coding Standards" />
</a>
<a href="https://packagist.org/packages/blade-ui-kit/blade-heroicons">
    <img src="https://img.shields.io/packagist/v/blade-ui-kit/blade-heroicons" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/blade-ui-kit/blade-heroicons">
    <img src="https://img.shields.io/packagist/dt/blade-ui-kit/blade-heroicons" alt="Total Downloads">
</a>

A package to easily make use of [Heroicons](https://github.com/refactoringui/heroicons) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](resources/svg) or preview them at [heroicons.com](https://heroicons.com/). Heroicons are originally developed by [Steve Schoger](https://twitter.com/steveschoger) and [Adam Wathan](https://twitter.com/adamwathan).

## Requirements

- PHP 8.0 or higher
- Laravel 9.0 or higher

## Installation

```bash
composer require blade-ui-kit/blade-heroicons
```

## Updating

Please refer to [`the upgrade guide`](UPGRADE.md) when updating the library.

## Blade Icons

Blade Heroicons uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/driesvints/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/driesvints/blade-icons#caching) with this library.

## Configuration

Blade Heroicons also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-heroicons.php` config file:

```bash
php artisan vendor:publish --tag=blade-heroicons-config
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-heroicon-o-arrow-left/>
```

You can also pass classes to your icon components:

```blade
<x-heroicon-o-arrow-left class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-heroicon-o-arrow-left style="color: #555"/>
```

Or use the `@svg` directive:

```blade
@svg('heroicon-o-arrow-left', 'w-6 h-6', ['style' => 'color: #555'])
```

The solid icons can be referenced like this:

```blade
<x-heroicon-s-arrow-left/>
```

The mini icons can be referenced like this:

```blade
<x-heroicon-m-arrow-left/>
```

And the micro icons can be referenced like this:

```blade
<x-heroicon-c-arrow-left/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-heroicons --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-heroicons/o-arrow-left.svg') }}" width="10" height="10"/>
```

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Blade Heroicons is developed and maintained by [Dries Vints](https://driesvints.com).

## License

Blade Heroicons is open-sourced software licensed under [the MIT license](LICENSE.md).
