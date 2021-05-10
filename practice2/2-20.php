<?php

$scores = [
  'taguchi' => 80,
  'hayashi' => 70,
  'kikuchi' => 60,
];

// sort($scores);
// print_r($scores);
// rsort($scores);
// print_r($scores);

asort($scores);
print_r($scores);
arsort($scores);
print_r($scores);

ksort($scores);
print_r($scores);
krsort($scores);
print_r($scores);