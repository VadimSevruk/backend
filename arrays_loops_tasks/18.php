<?php

$arr = ['Воскресенье',
		'Понедельник',
		'Вторник',
		'Среда',
		'Четверг',
		'Пятница',
		'Суббота'];

foreach ($arr as $value) {
	switch ($value) {
		case 'Воскресенье':
		case 'Суббота':
			echo "<strong>$value</strong>" . '<br>';
			break;
		
		default:
			echo "$value" . '<br>';
			break;
	}
}