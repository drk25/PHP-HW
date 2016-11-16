<?php
	class BorrowerFactory{
		
		public static function createBorrower($name){
			return new Borrower($name);
		}
	}
?>