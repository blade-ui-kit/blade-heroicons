# Upgrade Guide

General steps for every update:

- Run `php artisan view:clear`

## Upgrading from Blade Icons

If you're upgrading from the original Blade Icons package there's very little steps you would need to take. The syntax for the Blade components has remained the same.

If you were using the raw exported icons you'll need to re-publish them with:

```bash
php artisan vendor:publish --tag=blade-heroicons --force
```

The new way to reference them is:

```blade
<img src="{{ asset('vendor/blade-heroicons/o-adjustments.svg') }}" width="10" height="10"/>
```
