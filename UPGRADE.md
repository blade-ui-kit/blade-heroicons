# Upgrade Guide

General steps for every update:

- Run `php artisan view:clear`

## Upgrading from 1.x to 2.0

### Minimum Requirements

The package now requires as a minimum:

- PHP 8.0
- Laravel 9.0

### Heroicons v2.0

PR: https://github.com/blade-ui-kit/blade-heroicons/pull/28

The shipped Heroicons are upgraded to the new v2 version. You should adjust any icon that was removed or renamed. While it's impossible to list all removed and renamed icons, it should become fairly obvious because Blade Icons will warn you with an exception when you try to generate an icon that doesn't exist anymore. You could also review all icons in the above PR.

## Upgrading from 0.3.1 to 1.0

### Minimum Requirements

The package now requires as a minimum:

- PHP 7.3
- Laravel 8.0
- Blade Icons 1.0

## Upgrading from Blade Icons

If you're upgrading from the original Blade Icons package there's very little steps you would need to take. The syntax for the Blade components has remained the same.

### Raw Icons

If you were using the raw exported icons you'll need to re-publish them with:

```bash
php artisan vendor:publish --tag=blade-heroicons --force
```

The new way to reference them is:

```blade
<img src="{{ asset('vendor/blade-heroicons/o-adjustments.svg') }}" width="10" height="10"/>
```

### Chevron Icons

The previous version of Blade Icons contained chevron icons with a misspelling as "cheveron". This has thus been corrected in the original Heroicons repository and now also here.
