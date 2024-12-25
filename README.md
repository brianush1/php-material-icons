# PHP Material Icons

Based on https://github.com/ramiroaisen/svelte-material-icons

## Usage

```php
<?php (require "icons/check.php")(size: "14", title: "Checkmark") ?>
```

You can search icons at https://materialdesignicons.com/

**Note:** If you wrap the icon into another element, set the display of the parent element to `flex` to avoid extra whitespace.

## Properties

```php
// all properties are optional
$size = "1em"
$color = "currentColor"
$width = null
$height = null
$viewBox = "0 0 24 24"
$className = null
$ariaLabel = null
$ariaHidden = null
$title = null
$desc = null
```
