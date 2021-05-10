<?php

// $contents = "taro\njiro\nsaburo\n";
// file_put_contents('names.txt', $contents);

// $contents = file_get_contents('names.txt');
// echo $contents;

// $lines = file('names.txt');
$lines = file('names.txt', FILE_IGNORE_NEW_LINES);
var_dump($lines);