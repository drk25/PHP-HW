<?php
class Home extends Controller {
	
	
	public function index($title = '') {
		$post = $this->model('Post');
		$post->title = "Dhawal";

		$this->view('home',['title'=>$post->title]);
	}
	
	public function register() {
		
		echo "Registration for User";
	}
}//end class	
?>