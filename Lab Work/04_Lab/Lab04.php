<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lab04</title>
</head>
<body>
	
	<?php
	class Player {

		// Default values
		public $level = 1;
	  	public $race = "human";
	  	public $HP = 100 ;
	  	public $weapon = "Hands";

		function control_level($x) {
			$this->level = $x;
		}

		function control_hp($x) {
			$this->HP += $x;
		}

		function attack($x) {
			$this->weapon = $x;

		}

		function get_info() {
			echo "The player level is ".$this->level;
			echo"<br>";
			echo "The player Race is ".$this->race;
			echo"<br>";
			echo "The player has HP " .$this->HP;
			echo"<br>";
			echo "The player weapon is " .$this->weapon;
			echo"<br>";
			echo"<br>";
		}

	}

	$Faris = new Player();

	$Faris->get_info();

	// Changing values
	$Faris->race = "Elf";
	$Faris->control_level(5);
	$Faris->control_HP(-50);
	$Faris->attack("Sword");

	$Faris->get_info();


	?>

</body>
</html>


