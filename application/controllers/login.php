<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {

		$this -> load -> view('login');

	}

	function check() {
		echo file_get_contents("http://user.zjut.com/api.php?app=member&action=login&username=sqroc&password=901029");
		if ($this -> Users_model -> check()) {
			echo "登录成功！";
		} else {
			echo "登录失败！";
		}
	}

}
?>