<?php
include __DIR__ . '/../src/suit.php';

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
/*

//  endsWith
// https://stackoverflow.com/a/834355/148496
function endsWith($haystack, $needle) {
  $length = strlen($needle);
  if($length == 0) return true;
  return (substr($haystack, -$length) === $needle);
}

// obfuscate email
function obfuscate($email) {
    $out = '';
    for($i=0; $i < strlen($email); $i++){
        $out .= "&#" . ord($email[$i]) . ";";
    }
    return $out;
}

// replace
function replace($string, $from, $to) {
  return strtr($string, $from, $to);
}

// slug
function slug($string) {
  return strtolower(
    trim(
      preg_replace(
          '~[^0-9a-z]+~i',
          '-',
          html_entity_decode(
          preg_replace(
              '~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i',
              '$1',
              htmlentities(
              $string,
              ENT_QUOTES,
              'UTF-8'
              )
          ),
          ENT_QUOTES,
          'UTF-8'
          )
      ),
      '-'
      )
  );
}

// startsWith
// https://stackoverflow.com/a/834355/148496
function startsWith($haystack, $needle) {
  return (substr($haystack, 0, strlen($needle)) === $needle);
}

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