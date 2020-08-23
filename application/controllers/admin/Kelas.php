<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kelas_model');
		$this->auth->cek_login_admin();
	}
	
	public function index()
	{
		$this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'trim|required|is_unique[kelas.nama_kelas]');
		
		if ( $this->form_validation->run() ) {
			$data = [
				'nama_kelas'	=> $this->input->post('nama_kelas', true)
			];
			$this->kelas_model->insert($data);
			$this->session->set_flashdata('sukses', 'Kelas Berhasil Di Tambahkan');
		} 
		
		$kelas = $this->kelas_model->index();
		$data = [
			'title'		=> 'Kelas',
			'kelas'		=> $kelas,
			'content'	=> 'admin/kelas/index'
		];
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function edit($id_kelas)
	{
		$this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'trim|required|is_unique[kelas.nama_kelas]');
		
		if ( $this->form_validation->run() ) {
			$data = [
				'nama_kelas'	=> $this->input->post('nama_kelas', true)
			];
			$this->kelas_model->update($id_kelas, $data);
			$this->session->set_flashdata('sukses', 'Kelas Berhasil Di Edit');
			redirect(base_url('admin/kelas'), 'refresh');
		} 

		$kelas = $this->kelas_model->detail($id_kelas);
		$data = [
			'title'		=> 'Kelas',
			'kelas'		=> $kelas,
			'content'	=> 'admin/kelas/edit'
		];
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function hapus($id_kelas)
	{
		$this->kelas_model->delete($id_kelas);
		$this->session->set_flashdata('sukses', 'Data Berhasil Di Hapus');
		redirect(base_url('admin/kelas'), 'refresh');
	}

}

/* End of file Kelas.php */
/* Location: ./application/controllers/admin/Kelas.php */