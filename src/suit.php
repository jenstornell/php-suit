<?php
include __DIR__ . '/array.php';
include __DIR__ . '/server.php';
include __DIR__ . '/str.php';

class folder2 {
  public static function recursive($path) {
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::CHILD_FIRST);
    $iterator->setFlags(RecursiveDirectoryIterator::SKIP_DOTS);
    foreach($iterator as $file) {
      if($file->isDir()) {
        echo $file . "\n";
        $folders[] = (string)$file;
      }
    }
    return $folders;
  }
}