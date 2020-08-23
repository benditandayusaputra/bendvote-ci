<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_message('required', '%s Harus Di Isi');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ( $this->form_validation->run() ) {
			$username = $this->input->post('username', true);
			$password = $this->input->post('password', true);
			$this->auth->login_admin($username, $password);
		}

		$data['title']	= "Halaman Login";
		$this->load->view('admin/login/index', $data, FALSE);	
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */