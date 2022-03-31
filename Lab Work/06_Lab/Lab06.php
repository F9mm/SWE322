<?php

	$host_ip = "127.0.0.1";
	$username = "root";
	$password = "";
	$database = "db_name";

	$conn = mysqli_connect($host_ip, $username, $password, $database);

	if(!$conn){
		echo "Debugging error nomber: " . mysqli_connect_errno();
		echo "<br>";
		echo "Debugging error: ". mysqli_connect_error();
		exit;
	}else{
		echo "connected";
		echo "<br>";
	}

	$query = "INSERT INTO table_01 (u_name, email, phone) VALUES('username_test', 'Faris@email.com', '0123456789')";

	if(mysqli_query($conn, $query)){
		echo "Data has been successfully inserted";
	}else{
		echo "Error: ". $query . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);

?>
