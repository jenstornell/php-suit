<?php
// recursiveFolders
function recursiveFolders($path) {
  $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::CHILD_FIRST);
  $iterator->setFlags(RecursiveDirectoryIterator::SKIP_DOTS);
  foreach($iterator as $item) {
    if($item->isDir()) {
      $folders[] = (string)$item;
    }
  }
  return $folders;
}

// Read returns true or false
function read($url) {
  $content = file_get_contents($url);
  if($content === false) return false;
  return $content;
}

// toDir
function path($path) {
  return str_replace('/', '\\', $path);
}