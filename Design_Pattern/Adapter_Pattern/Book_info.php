<?php
include ("Book.php");
include ("BookAdapter.php");




		$book = new Book("Erich Gamma, Richard Helm, 
		Ralph Johnson, John Vlissides", "Gang of four: Design Patterns");
		$bookAdapter = new BookAdapter($book);
		echo 'Author and Title: '.$bookAdapter->getAuthorAndTitle();
		

		

		function writeln($line_in) {
			echo $line_in."<br/>";
		}


?>