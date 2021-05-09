<?php

// file_put_contents('data/taro.txt', "taro\n");
// file_put_contents('data/jiro.txt', "jiro\n");

$dp = opendir('data');
while (($item = readdir($dp)) !== false) {
  if ($item === '.' || $item === '..') {
    continue;
  }
  echo $item . PHP_EOL;
}