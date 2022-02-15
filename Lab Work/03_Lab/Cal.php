<!DOCTYPE html>
<!-- Faris Almgobil -->
<html lang="en">
<head>
	<title> Calculator </title>
</head>
<body>
	<form action="Action.php" method = "GET"> <br><br><br>
		
		<!-- Text -->
		<input type="text" name="first_value" placeholder="Enter First value"/> <br>

		<!-- Radio button -->
		<input type="radio" name="opr"  value="+"> 
			<label for="opr">+</label>
		<input type="radio" name="opr" value="-"> 
			<label for="opr">-</label>
		<input type="radio" name="opr" value="*"> 
			<label for="opr">*</label>
		<input type="radio" name="opr" value="/"> 
			<label for="opr">/</label>	
		<br>
		
		<input type="text" name="second_value" placeholder="Enter Second value" /> <br>
		<input type="submit" value="Calculate"/>

	</form>
	
</body>