<?php
// cleanArray from empty values
// https://stackoverflow.com/a/3654309/148496
function clean($array) {
  $clean = array_filter($array); 
  return $clean;
}

// first value from array
function first($array) {
  $value = reset($array);
  return $value;
}

function last($array) {
  return end($array);
}