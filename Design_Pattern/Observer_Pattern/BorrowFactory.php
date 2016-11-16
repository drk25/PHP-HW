<?php
	class Borrower {
		private $name;
		private $book = NULL;
		private $book_available = FALSE;
		public $obs = array();

		public function __construct($name){
			$this->name = $name;
		}

		public function borrowBook($book){
			if($book != NULL){
				$this->book = $book;
				$this->book_available = TRUE;
				$this->notify($this->name ,$this->book->getTitle(), 'borrows');
			}
		}

		public function notify($name, $bookTitle, $action){
			foreach($this->obs as $ob){
				//Library_observer method
				$ob->update($name, $bookTitle, $action);
			}
		}
		
		public function returnBook(){
			if($this->book != NULL){
				$this->book->returnBook($this->book);
				$this->book_available = FALSE;
				$this->notify($this->name ,$this->book->getTitle(), 'returns');
			}
		}

		public function attach(MyObserver $ob){
			$this->obs[] = $ob;
		}

		public function detach(MyObserver $ob){
			foreach($this->obs as $okey => $oval){
				if($oval == $ob){
					unset($this->obs[$okey]);
				}
			}
		}

		

		public function getName(){
			echo $this->name;
		}

		public function getBookTitle(){
			if($this->book != NULL && $this->book_available == TRUE){
				echo $this->book->getTitle() . '<br>';
			}
			else{
				echo 'I dont have a book.<br>';
			}
		}

		public function getbook_available(){
			echo $this->book_available;
		}
	}

	
?>