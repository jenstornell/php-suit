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

| Name       | Params         | Description |
| ---------- | -------------- | ----------- |
| **ARRAY** | | |
| cleanArray | (array) $array | Clean up array from empty values |
| first      | (array) $array | Returns the first value of an array |
| last       | (array) $array | Returns the last value of an array |
| **FILE** | | |
| recursiveFolders | (string) $path | Returns recursive folders as array |
| read             | (string) $url  | Returns file contents or false
| path             | (string) $path | Like [realpath](https://www.php.net/manual/en/function.realpath.php) but always return a path
| **SERVER**
| currentUrl       | -              | Returns the current url |
| isHttps          | -              | Returns true or false depending if the host is https or not |
| isLocalhost      | (array) ['127.0.0.1', '::1'] | Returns true or false depending on if the host is localhost or not |
| **STRING** | | |
| between          | string $content, string $start, string $end | Return string between two strings |
| contains         | string $needle, array $haystack | Returns true or false depending on if the string is found in another string |
| endsWith         | array $haystack, string $needle | Returns true or false depending on if the string ends with it |
| obfuscate        | string $email | Return an obfuscated email address |
| startsWith       | array $haystack, string $needle | Returns true or false depending on if the string starts with it |
| removeWhitespace | string $string | Remove whitespace from a string |
| replace          | string/array $mixed, $to | Alias for [strtr](https://www.php.net/manual/en/function.strtr.php) |
| slug             | string $string | Convert $string to slug |
| stripZeros        | string/float $value | Remove ending zeroes from a value |

## Donate

Donate to [DevoneraAB](https://www.paypal.me/DevoneraAB) if you want.

## License

MIT