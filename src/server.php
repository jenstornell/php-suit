<?php
// current_url
// Dependencies: isHttps
function current_url() {
  $protocol = is_https() ? 'https' : 'http';
  return "$protocol://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}

// isHttps
function is_https() {
  return (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')    || $_SERVER['SERVER_PORT'] == 443;
}

// isLocalhost
function is_localhost($whitelist = ['127.0.0.1', '::1']) {
  return in_array($_SERVER['REMOTE_ADDR'], $whitelist);
}