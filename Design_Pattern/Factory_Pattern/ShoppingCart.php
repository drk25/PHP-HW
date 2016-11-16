<?php
	class ShoppingCart {
		private $productsInCart = array();
		private $productFactory;
		
		public function __construct() {
			//calls the productFactory class
			$this->productFactory = new productFactory();
		}
	
	function add($productId) {
		//factory pattern
		$this->productsInCart[] = $this->productFactory->make($productId);
	}
		
	
			
	}//end class
?>