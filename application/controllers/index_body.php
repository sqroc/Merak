<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Index_body extends CI_Controller {

	public function index() {
		$this -> load -> view('header');
		$this -> load -> view('index');
		$this -> load -> view('footer');
	}

}
?>