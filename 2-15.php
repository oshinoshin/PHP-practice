<?php

$a = [3, 4, 8];
$b = [4, 8, 12];

$merged = array_merge($a, $b);
print_r($merged);

$uniques = array_unique($merged);
print_r($uniques);

// $aと$bの共通の要素をのぞき、$aの要素を返してくれる
$diff1 = array_diff($a, $b);
print_r($diff1); // [3]

// $aと$bの共通の要素をのぞき、$bの要素を返してくれる
$diff2 = array_diff($b, $a);
print_r($diff2); // [12]

// $aと$bの共通の要素を返す
$common = array_intersect($a, $b);
print_r($common); // [4, 8]