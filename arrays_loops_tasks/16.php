<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($arr as $value) {
	echo "$value, ";
	$r = $value % 3;
	if ($r == 0) {
		echo '<br>';
	}
}