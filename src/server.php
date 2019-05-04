<?php
// _get
function _get($value = null) {
  if(!isset($_GET)) return;
  if(!isset($_GET[$value])) return $_GET;
  return $_GET[$value];
}

// current_url
// Dependencies: is_https
function current_url() {
  $protocol = is_https() ? 'https' : 'http';
  return "$protocol://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}

// ip
// https://css-tricks.com/snippets/php/get-users-ip-address/
function ip() {
  if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  } elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
    $ip = $_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}

// is_https
function is_https() {
  return (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')    || $_SERVER['SERVER_PORT'] == 443;
}

// is_localhost
function is_localhost($whitelist = ['127.0.0.1', '::1']) {
  return in_array($_SERVER['REMOTE_ADDR'], $whitelist);
}