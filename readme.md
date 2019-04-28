# Suit

A small collection of helper functions.

## Functions

### Array

| Name       | Params         | Description |
| ---------- | -------------- | ----------- |
| **Array** | | |
| cleanArray | (array) $array | Clean up array from empty values |
| first      | (array) $array | Returns the first value of an array |
| last       | (array) $array | Returns the last value of an array |
| **File** | | |
| recursiveFolders | (string) $path | Returns recursive folders as array |
| read             | (string) $url  | Returns file contents or false
| path             | (string) $path | Like [https://www.php.net/manual/en/function.realpath.php](realpath) but always return a path
| **Server**
| currentUrl       | -              | Returns the current url |
| isHttps          | -              | Returns true or false depending if the host is https or not |
| isLocalhost      | (array) ['127.0.0.1', '::1'] | Returns true or false depending on if the host is localhost or not |
| **String** | | |
| between          | string $content, string $start, string $end | Return string between two strings |
| contains         | string $needle, array $haystack | Returns true or false depending on if the string is found in another string |
| endsWith         | array $haystack, string $needle | Returns true or false depending on if the string ends with it |
| obfuscate        | string $email | Return an obfuscated email address |
| startsWith       | array $haystack, string $needle | Returns true or false depending on if the string starts with it |
| removeWhitespace | string $string | Remove whitespace from a string |
| replace          | string/array $mixed, $to | Alias for [https://www.php.net/manual/en/function.strtr.php](strtr) |
| slug             | string $string | Convert $string to slug |
| stripZeros        | string/float $value | Remove ending zeroes from a value |