<?php
//book class ro get auther and title names
class Book {
	private $author;
	private $title;
	function __construct($the_author, $the_title) {
		$this->author = $the_author;
		$this->title  = $the_title;
	}
	function getAuthor() {
		return $this->author;
	}
	function getTitle() {
		return $this->title;
	}
}

?>