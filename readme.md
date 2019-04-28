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
// Returns recursive folders as array
recursiveFolders(string $path);

// Like realpath but always return a path
// https://www.php.net/manual/en/function.realpath.php
path(string $path);
```

### Server

```php
// Returns the current url
currentUrl();

// Returns true or false depending if the host is https or not
isHttps();

// Returns true or false depending on if the host is localhost or not
isLocalhost(array ['127.0.0.1', '::1']);
```

### String

```php
// Return string between two strings
between(string $content, string $start, string );

// Returns true or false depending on if the string is found in another string
contains(string $needle, array $haystack);

// Returns true or false depending on if the string ends with it
endsWith(array $haystack, string $needle);

// Return an obfuscated email address
obfuscate(string $email);

// Remove whitespace from a string
removeWhitespace(string $string);

// Alias for [strtr](https://www.php.net/manual/en/function.strtr.php)
replace(array $mixed);
replace(string $from, string $to);

// Returns true or false depending on if the string starts with it
startsWith(array $haystack, string $needle);

// Convert $string to slug
slug(string $string);

// Remove ending zeroes from a value
stripZeros(string);
```

## Donate

Donate to [DevoneraAB](https://www.paypal.me/DevoneraAB) if you want.

## License

MIT