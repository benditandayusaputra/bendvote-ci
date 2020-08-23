<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function login($username, $password)
	{
		$where = [
			'username'	=> $username,
			'password'	=> sha1($password)
		];
		$this->db->where($where);
		return $this->db->get('admin')->row();
	}

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */