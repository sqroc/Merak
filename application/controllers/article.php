<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Article extends CI_Controller {

	public function add() {
		$this -> load -> view('header');
		$this -> load -> view('article/addarticle');
		$this -> load -> view('footer');
	}

}
?>