<?php

$arr = [];

for ($i = 0; $i < 2; $i++) { 
	array_push($arr, rand(0,100));
}

var_dump($arr);

$max = array_keys($arr, max($arr));

$min = array_keys($arr, min($arr));

var_dump($max[0], $min[0]);

$tmp = 0;

$tmp = $arr[$min[0]];

$arr[$min[0]] = $arr[$max[0]];

$arr[$max[0]] = $tmp;

var_dump($arr);

