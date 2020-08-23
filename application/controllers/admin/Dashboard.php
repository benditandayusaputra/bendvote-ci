<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('calon_model');
		$this->auth->cek_login_admin();
	}
	
	public function index()
	{
		$jumlah_calon = $this->calon_model->jumlah_calon();
		$data = [
			'title'			=> 'Dashboard Admin',
			'jumlah_calon'	=> $jumlah_calon,
			'content'		=> 'admin/dashboard/index'
		];
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */