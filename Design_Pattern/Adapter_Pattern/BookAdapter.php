<?php 
class BookAdapter {
	private $book;
	function __construct(Book $the_book) {
		$this->book = $the_book;
	}
	function getAuthorAndTitle() {
		return $this->book->getTitle().' by '.$this->book->getAuthor();
	}
}
?>