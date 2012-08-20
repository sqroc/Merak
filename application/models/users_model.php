<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Users_model extends CI_Model {

	function check() {
		$sql = "SELECT * FROM kuser";
		$query = $this -> db -> query($sql);
		foreach ($query->result() as $row) {
				return TRUE;
		}
			return TRUE;
	}

}
?>