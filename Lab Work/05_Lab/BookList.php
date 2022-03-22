<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>List</title>
</head>
<body>
	
<?php
	class BookList {

		Private $Books = array("Book1", "Book2", "Book3");
		
		public function GetBookList() {
			return $this->Books;
		}

		public function SearchBookList($x) {
			return $x;
		}
		
		public function DisplayBookList() {
			foreach ($this->Books as $x) {
				echo $x . "<br>";
			}
		}
	}

	$testList = new BookList();
	$testList->DisplayBookList();
	
?>

</body>
</html>


