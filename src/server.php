<?php
// currentUrl
// Dependencies: isHttps
function currentUrl() {
  $protocol = isHttps() ? 'https' : 'http';
  return "$protocol://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}

// isHttps
function isHttps() {
  return (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')    || $_SERVER['SERVER_PORT'] == 443;
}

// isLocalhost
function isLocalhost($whitelist = ['127.0.0.1', '::1']) {
  return in_array($_SERVER['REMOTE_ADDR'], $whitelist);
}