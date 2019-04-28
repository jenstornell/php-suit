<?php
namespace Suit;
include __DIR__ . '/../src/suit.php';

#use Suit as suit;

// Array
$clean = clean(['a', '', 0, null, 'b']);
if(count($clean) != 2) echo 'clean';

$first = first(['a', 'b']);
if($first != 'a') echo 'first';

$last = last(['a', 'b']);
if($last != 'b') echo 'last';

// File
if(path('this\\is\\a/path.txt') != 'this\is\a\path.txt')
echo 'path';

$paths = recursiveFolders(__DIR__ . '/folder');
if(count($paths) != 2) echo 'recursiveFolders';

// Server

if(currentUrl() != 'http://localhost/misc/suit/tests/tests.php')
echo 'currentUrl';

if(isHttps() === true) echo 'isHttps';

if(isLocalhost() === false) echo 'isLocalhost';

// String

$between = between('Hello world', 'el', 'ld');
if($between != 'lo wor') echo 'between';

$contains = contains('ello', 'Hello World');
if($contains === false) echo 'contains';

$endswith = endsWith('Hello world', 'rld');
if($endswith === false) echo 'endsWith';

$email = obfuscate('hello@example.com');
if($email != '&#104;&#101;&#108;&#108;&#111;&#64;&#101;&#120;&#97;&#109;&#112;&#108;&#101;&#46;&#99;&#111;&#109;')
echo 'email';

$slug = slug('Åäö');
if($slug != 'aao') echo 'slug';

$startswith = startsWith('Hello world', 'Hell');
if($startswith === false) echo 'startswith';


/*
// strip
function strip($string) {
  return preg_replace('/\s+/', '', $string);
}

// skipZeros
// https://stackoverflow.com/a/47669434/148496
function stripZeros($value) {
  return sprintf("%s\n", (float)$value);
}
*/