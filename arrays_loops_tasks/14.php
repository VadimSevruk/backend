<?php

$arr = [4, 2, 5, 19, 13, 0, 10];

$e = [2, 3, 4];

foreach ($arr as $value) {
	echo '<br>';
	foreach ($e as $val) {
		if ($value == $val) {
			echo 'Есть!' . '<br>';
		} else {
			echo 'Нет!' . '<br>';
		}
	}
}