<!DOCTYPE html>
<!-- Faris Almgobil -->
<html lang="en">
<head>
	<title> Output </title>
</head>
<body>
	<?php
		$value_1 = $_GET["first_value"];
		$value_2 = $_GET["second_value"];
		
		$op = $_GET["opr"];
		
		switch ($op) {
			case "+":
				echo add ($value_1, $value_2);
				break;
			case "-":
				echo sub ($value_1, $value_2);
				break;
			case "*":
				echo mul ($value_1, $value_2);
				break;
			case "/":
				echo div ($value_1, $value_2);
				break;
		  default:
			echo "operation is incorrect";
		}
	
		function add ($x, $y){ return ($x + $y); }
		function sub ($x, $y){ return ($x - $y); }
		function mul ($x, $y){ return ($x * $y); }
		function div ($x, $y){ return ($x / $y); }
	?>
	
</body>