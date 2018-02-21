<?php

$arr = [];

$sum = 1;

$k = 0;

$n = [];

for ($i = 0; $i < 10; $i++) { 
	array_push($arr, rand(0,100));
}

foreach ($arr as $key => $value) {
	$k = $key % 2;
	if ($k == 0 && $key > 0) {
		$sum *= $key;
	} else {
		array_push($n, $key);
	}
}

echo $sum . '<br>';

foreach ($n as $v) {
	 echo $v . '<br>';
}
