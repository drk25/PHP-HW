<?php

class ProductFactory {
	
	function make($productId) {
		if($this->isKeyboard($productId)) 
			return new Keyboard();
		return new Mouse();
	}

//any productid starts with k is keyboard
	private function isKeyboard($productId) {
			
			return substr("$productId",0,1) == 'k';
		}
	
}//end class

?>