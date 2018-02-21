<?php

$arr = ['Воскресенье',
		'Понедельник',
		'Вторник',
		'Среда',
		'Четверг',
		'Пятница',
		'Суббота'];

$day = 'Среда';

foreach ($arr as $value) {
	if ($value == $day) {
		echo "<i>$value</i>" . '<br>';
	} else {
		echo $value . '<br>';
	}
}