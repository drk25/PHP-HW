<?php
	class LibraryObserver {
		
		
		public function log($name, $bookTitle, $action) {
			echo "Observer says: Borrower " . $name . " " . $action . " " .$bookTitle . "<br>";
		  }
	}
?>