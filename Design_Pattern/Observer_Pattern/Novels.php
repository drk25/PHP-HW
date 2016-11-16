<?php
class MyFunBook {
	private $author = "Brad	Wise";
	private $title = "The Great Gatsby";
	private static $book = NULL;
	private static $isOut = FALSE;

	private function __construct() {
	}

	static function borrowBook(){
		if(self::$isOut == FALSE){
			if(self::$book == NULL){
				self::$book = new MyFunBook();
			}
			self::$isOut = TRUE;
			return self::$book;
		}
		else{
			return NULL;
		}
	}

	static function returnBook(MyFunBook $returnedBook){
		self::$isOut = FALSE;
	}

	public function getAuthor(){
		return $this->author;
	}

	public function getTitle(){
		return $this->title;
	}

	public function getAuthorAndTitle(){
		return $this->title . ' by ' . $this->author;
	}

}


?>
