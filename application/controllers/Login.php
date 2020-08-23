<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_message('required', '%s Harus Di Isi');
		$this->form_validation->set_rules('nis', 'NIS/NIP', 'required');
		$this->form_validation->set_rules('token', 'Token', 'required');

		if ( $this->form_validation->run() ) {
			$nis 	= $this->input->post('nis', true);
			$token  = $this->input->post('token', true);
			$this->auth->login($nis, $token);
		}

		$data = [
			'title'		=> 'Halaman Login',
			'content'	=> 'login/index'
		];
		$this->load->view('layout/wrapper', $data, FALSE);	
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */