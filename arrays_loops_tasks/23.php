<?php

$number = "123";

$sum = 0;

if (is_numeric($number)) {
	for ($i = 0; $i < strlen($number) ; $i++) { 
		$d = str_split($number);
		$sum += $d[$i];
	}
	echo $sum;
}

