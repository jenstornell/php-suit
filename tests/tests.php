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
$files = files(__DIR__ . '/folder', 'files', '/\.txt$/');
if(count($files) != 1) echo 'file';

if(path('this\\is\\a/path.txt') != 'this\is\a\path.txt')
echo 'path';

$rfiles = rfiles(__DIR__ . '/folder', 'files', '/\.txt$/');
if(count($rfiles) != 2) echo 'rfiles';

// Server

$_GET = ['hello' => 'world'];
if(_get('hello') != 'world') return '_get';

if(current_url() != 'http://localhost/misc/suit/tests/tests.php')
echo 'currentUrl';

if(ip() != '::1') echo 'ip';

if(is_https() === true) echo 'isHttps';

if(is_localhost() === false) echo 'isLocalhost';

// String

$between = between('Hello world', 'el', 'ld');
if($between != 'lo wor') echo 'between';

$contains = contains('ello', 'Hello World');
if($contains === false) echo 'contains';

$endswith = ends_with('Hello world', 'rld');
if($endswith === false) echo 'endsWith';

$email = obfuscate('hello@example.com');
if($email != '&#104;&#101;&#108;&#108;&#111;&#64;&#101;&#120;&#97;&#109;&#112;&#108;&#101;&#46;&#99;&#111;&#109;')
echo 'email';

$slug = slug('Åäö');
if($slug != 'aao') echo 'slug';

$startswith = starts_with('Hello world', 'Hell');
if($startswith === false) echo 'startswith';

$strip = strip(" Hej åäö\n
abc ");
if($strip != 'Hej åäö abc') echo 'strip';

if(limit('Jag ål', 5) != 'Jag å...') echo 'limit';

if(word_limit('Lö Vårö Lä Lå', 2) != 'Lö Vårö...') echo 'word_limit';