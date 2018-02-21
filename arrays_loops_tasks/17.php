<?php

$arr = ['Январь', 
		'Февраль', 
		'Март', 
		'Апрель', 
		'Май', 
		'Июнь', 
		'Июль', 
		'Август', 
		'Сентябрь',
		'Октябрь',
		'Ноябрь', 
		'Декабрь'];

$month = 'Февраль';

foreach ($arr as $value) {
	if ($value == $month) {
		echo "<strong>$value</strong>" . '<br>';
	} else {
		echo $value . '<br>';
	}
}