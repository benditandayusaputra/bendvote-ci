<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
        $this->ci->load->model('admin_model');
        $this->ci->load->model('users_model');
	}

	public function login($nis, $token)
	{
		$res = $this->ci->users_model-> login($nis, $token);
		if ( $res ) {
			if ( $res->status_pilih == 0 ) {
				$array = array(
					'id_user'  => $res->id_user,
					'nis' 	   => $nis
				);	
				$this->ci->session->set_userdata( $array );	
				redirect(base_url('profile'), 'refresh');
			} else {
				$this->ci->session->set_flashdata('error', 'Anda Sudah Meimilih');
				redirect(base_url('login'));
			}
		} else {
			$this->ci->session->set_flashdata('error', 'NIS atau Token Tidak Ada');
			redirect(base_url('login'), 'refresh');
		}
	}

	public function login_admin($username, $password)
	{
		$res = $this->ci->admin_model->login($username, $password);
		if ( $res ) {
			$array = array(
					'id_admin' => $res->id_admin,
					'username' => $username
				);	
			$this->ci->session->set_userdata( $array );	
			redirect(base_url('admin/dashboard'), 'refresh');
		} else {
			$this->ci->session->set_flashdata('error', 'Username atau Password Salah!!');
			redirect(base_url('admin/login'), 'refresh');
		}
	}

	public function cek_login()
	{
		if ( $this->ci->session->userdata('nis') == '' ) {
			redirect(base_url('login'), 'refresh');
		}
	}
	
	public function cek_login_admin()
	{
		if ( $this->ci->session->userdata('username') == '' ) {
			redirect(base_url('admin/login'), 'refresh');
		}
	}

}

/* End of file Auth.php */
/* Location: ./application/libraries/Auth.php */								