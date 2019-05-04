# PHP Suit

*Version 1.2* - [Changelog](changelog.md)

The missing PHP functions. Grab the whole library, or just pick the function you need.

## In short

- Small library
- The function names are as short as possible
- The function names uses underscores just like native PHP
- No duplicates of already existing PHP functions
- No dependencies
- No namespaces or classes

## Functions

### File

```php
// Return an array with files and/or folders
// $type is `'files'`, `'folders'` or `null` (which is both)
// $regex is an optional regular expression like `'/\.txt$/'`
files(string $path, string $type, string $regex);

// Same as above but for getting files and/or folders recursively
rfiles(string $path, string $type, string $regex);

// Like realpath but does always return a path
path(string $path);
```

### Server

```php
// Return the current url
current_url();

// Check if https or not
is_https();

// Check if localhost or not
is_localhost(array ['127.0.0.1', '::1']);
```

### String

```php
// Check if $haystack starts with the text in the $needle
starts_with(array $haystack, string $needle);

// Check if $haystack ends with the text in the $needle
ends_with(array $haystack, string $needle);

// Check if $haystack contains the text in the $needle
contains(string $needle, array $haystack);

// Return a string between $start and $end
between(string $content, string $start, string $end);

// Returns an obfuscated email address
obfuscate(string $email);

// Remove whitespace from a string
// Remove newlines, tabs, double spaces and trim spaces before and after
strip(string $string);

// Convert $string to slug
slug(string $string);
```

## In case of collisions

### Namespaces

The functions are made to be as short as possible. In case you run into collisions, you can add a namespace at the top of the files.

```php
namespace suit;
```

To make it work, you should also add the namespace you your files. Then you can use the same syntax as before.

In case that is not possible you can use `use` like below:

```php
use suit as s;

echo s\slug('Åäö');
```

## Other sites used

Some functions are taken from other sources. For more details, see the code where there are links directly to the soruces.

- https://stackoverflow.com
- https://github.com/clausnz/php-helpers

## Similar libraries

- https://github.com/JBZoo/Utils
- https://github.com/clausnz/php-helpers

## Donate

Donate to [DevoneraAB](https://www.paypal.me/DevoneraAB) if you want.

## License

MIT