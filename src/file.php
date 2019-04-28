<?php
// path
function path($path) {
  return str_replace('/', '\\', $path);
}

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