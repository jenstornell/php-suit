<?php
// between
// https://tonyspiro.com/using-php-to-get-a-string-between-two-strings/
function between($content, $start, $end){
  $r = explode($start, $content);
  if (isset($r[1])) {
      $r = explode($end, $r[1]);
      return $r[0];
  }
  return '';
}

// contains
// https://stackoverflow.com/a/7112596/148496
function contains($needle, $haystack) {
  return strpos($haystack, $needle) !== false;
}

//  endsWith
// https://stackoverflow.com/a/834355/148496
function ends_with($haystack, $needle) {
  $length = strlen($needle);
  if($length == 0) return true;
  return (substr($haystack, -$length) === $needle);
}

// limit
// https://github.com/clausnz/php-helpers#str_limit
function limit($string, $limit = 100, $end = '...') {
  if(mb_strwidth($string, 'UTF-8') <= $limit) return $string;
  return rtrim(mb_strimwidth($string, 0, $limit, '', 'UTF-8')) . $end;
}

// obfuscate email
function obfuscate($email) {
    $out = '';
    for($i=0; $i < strlen($email); $i++){
        $out .= "&#" . ord($email[$i]) . ";";
    }
    return $out;
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
function starts_with($haystack, $needle) {
  return (substr($haystack, 0, strlen($needle)) === $needle);
}

// strip
function strip($string) {
  return trim(preg_replace('/\s+/', ' ', $string));
}

// word_limit
// https://github.com/clausnz/php-helpers#str_limit_words
function word_limit($string, $limit = 10, $end = '...') {
  $words = explode(' ', $string);
  if (sizeof($words) <= $limit) return $string;
  return implode(' ', array_slice($words, 0, $limit)) . $end;
}