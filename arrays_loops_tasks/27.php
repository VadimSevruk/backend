<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		table {
			border-collapse: collapse;
		}

		td {
			border: solid 2px red;
		}
	</style>
</head>
<body>
<?php

$row = rand(0, 100);

$cols = rand(0, 100);


$colors = ['red','yellow','blue','gray','maroon','brown','green'];

?>
<table>
	<?php for ($i = 1; $i <= $row; $i++) : ?>
		<tr>
			<?php for ($i = 1; $i <= $cols; $i++) {
				$index = rand(0,6);

				$bgc =  $colors[$index];

				$num = rand(0, 1000);

				echo '<td style="background-color:' . $bgc . ';">' . $num . '</td>';
			}
			?>
		</tr>
	<?php endfor ?>
</table>
</body>
</htmla


