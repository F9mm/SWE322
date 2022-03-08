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

		$Books = "Books";
		
		/*
		public function GetBookList( {
			return $Books;
		}

		public function SearchBookList($x) {
			return $x
		}
		*/

		public function DisplayBookList() {
			
			/*
			for($i=0; i < count($BookList); i++){
				echo $Books[i];
				echo "<br>";
			}
			*/

			echo "test";
		}
	}

	$testList = new BookList();
	$testList->DisplayBookList();


?>

</body>
</html>


