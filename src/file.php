<?php
// files
function files($path, $type = null, $regex = false) {
  if(!is_dir($path)) return;
  $items = [];
  
  $iterator = new DirectoryIterator($path);

  if($regex) {
    $iterator = new RegexIterator($iterator, $regex);
  }

  foreach($iterator as $item) {
    switch($type) {
      case 'files':
        if(!$item->isDir()) {
          $items[] = (string)$item;
        }
        break;
      case 'folders':
        if($item->isDir()) {
          $items[] = (string)$item;
        }
        break;
      default:
        $items[] = (string)$item;
    }
  }
  return $items;
}

// path
function path($path) {
  return str_replace('/', '\\', $path);
}

// rfiles
function rfiles($path, $type = null, $regex = null) {
  if(!is_dir($path)) return;
  $items = [];

  $directory = new RecursiveDirectoryIterator($path);
  $child_first = RecursiveIteratorIterator::CHILD_FIRST;
  $iterator = new RecursiveIteratorIterator($directory, $child_first);
  $iterator->setFlags(RecursiveDirectoryIterator::SKIP_DOTS);

  if($regex) {
    $iterator = new RegexIterator($iterator, $regex);
  }

  foreach($iterator as $item) {
    switch($type) {
      case 'files':
        if(!$item->isDir()) {
          $items[] = (string)$item;
        }
        break;
      case 'folders':
        if($item->isDir()) {
          $items[] = (string)$item;
        }
        break;
      default:
        $items[] = (string)$item;
    }
  }

  return $items;
}