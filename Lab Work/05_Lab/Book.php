<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Book</title>
</head>
<body>
	
<?php
	class Book {
		Private $ISBN = "12345";
	  	Private $Author = "author name";
	  	Private $Title = "book title";
	  	Private $Description = "book description";

		function GetBookISBN() {
			return $this->ISBN;
		}

		public function GetAuthor() {
			return $this->Author;
		}

		public function GetTitle() {
			return $this->Title;
		}

		public function GetDescription() {
			return $this->Description;
		}

		public function DisplayBook() {
			echo $this->ISBN;
			echo"<br>";
			echo $this->Author;
			echo"<br>";
			echo $this->Title;
			echo"<br>";
			echo $this->Description;
		}
	}

$testbook = new Book();
$testbook->DisplayBook();


?>

</body>
</html>


