# Suit

*Version 1.0* - [Changelog](changelog.md)

The missing PHP functions.

## In short

- Small library, compared to others, for example [JBZoo Utils](https://github.com/JBZoo/Utils)
- The function names are as short as possible
- Unique, no duplicates of already existing PHP functions
- No dependencies

## Functions

### Array

```php
// Clean up array from empty values
clean(array $array);

// Returns the first value in an array
first(array $array);

// Returns the last value in an array
last(array $array)
```

### File

```php
// Returna a recursive folders as array
recursiveFolders(string $path);

// Like realpath but does always return a path
path(string $path);
```

### Server

```php
// Return the current url
currentUrl();

// Check if https or not
isHttps();

// Check if localhost or not
isLocalhost(array ['127.0.0.1', '::1']);
```

### String

```php
// Check if $haystack starts with the text in the $needle
startsWith(array $haystack, string $needle);

// Check if $haystack ends with the text in the $needle
endsWith(array $haystack, string $needle);

// Check if $haystack contains the text in the $needle
contains(string $needle, array $haystack);

// Return a string between $start and $end
between(string $content, string $start, string $end);

// Returns an obfuscated email address
obfuscate(string $email);

// Remove whitespace from a string
strip(string $string);

// Remove ending zeroes from a value
stripZeros(string);

// Alias for strtr
replace(array $mixed);
replace(string $from, string $to);

// Convert $string to slug
slug(string $string);
```

## Donate

Donate to [DevoneraAB](https://www.paypal.me/DevoneraAB) if you want.

## License

MIT