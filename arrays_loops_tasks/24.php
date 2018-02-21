<?php

$number = "1236576465456354348444444444056672";

$int = 4;

$count = 0;

$arr = str_split($number);

foreach ($arr as $value) {
	if ($value == $int) {
		$count++;
	}
}

echo $count;