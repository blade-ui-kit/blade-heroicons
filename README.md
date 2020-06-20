# Blade Heroicons

<a href="https://github.com/blade-ui-kit/blade-heroicons/actions?query=workflow%3ATests">
    <img src="https://github.com/blade-ui-kit/blade-heroicons/workflows/Tests/badge.svg" alt="Tests">
</a>
<a href="https://github.com/blade-ui-kit/blade-heroicons/actions?query=workflow%3A%22Code+Style%22">
    <img src="https://github.com/blade-ui-kit/blade-heroicons/workflows/Code%20Style/badge.svg" alt="Code Style">
</a>
<a href="https://packagist.org/packages/blade-ui-kit/blade-heroicons">
    <img src="https://poser.pugx.org/blade-ui-kit/blade-heroicons/v/stable.svg" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/blade-ui-kit/blade-heroicons">
    <img src="https://poser.pugx.org/blade-ui-kit/blade-heroicons/d/total.svg" alt="Total Downloads">
</a>

A package to easily make use of [Heroicons](https://github.com/refactoringui/heroicons) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](resources/svg) or preview them at [heroicons.dev](https://heroicons.dev). Heroicons are originally developed by [Steve Schoger](https://twitter.com/steveschoger) and [Adam Wathan](https://twitter.com/adamwathan).

## Requirements

- PHP 7.2 or higher
- Laravel 7.14 or higher

## Installation

```bash
composer require blade-ui-kit/blade-heroicons
```

## Updating

Please refer to [`the upgrade guide`](UPGRADE.md) when updating the library.

## Usage

Icons can be used a self-closing Blade components which will be compiled to SVG icons:

```blade
<x-heroicon-o-adjustments/>
```

You can also pass classes to your icon components:

```blade
<x-heroicon-o-adjustments class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-heroicon-o-adjustments style="color: #555"/>
```

The solid icons can be referenced like this:

```blade
<x-heroicon-s-adjustments/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-heroicons --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-heroicons/o-adjustments.svg') }}" width="10" height="10"/>
```

### Blade Icons

Blade Heroicons uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality.

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Blade Heroicons is developed and maintained by [Dries Vints](https://driesvints.com).

## License

Blade Heroicons is open-sourced software licensed under [the MIT license](LICENSE.md).
