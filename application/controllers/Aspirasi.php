<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Aspirasi extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('aspirasi_model');
    }
    
    public function index()
    {
        $this->form_validation->set_rules('aspirasi', 'Aspirasi', 'trim|required', [
            'required'  => 'Anda Harus Mengisi %s'
        ]);
        
        if ( $this->form_validation->run() ) {
            $data = [
                'id_user'   => $this->session->userdata('id_user'),
                'aspirasi'  => $this->input->post('aspirasi')
            ];
            $this->aspirasi_model->aspirasi($data);
            $this->session->set_flashdata('sukses', 'Terimakasih Sudah Memilih');
            redirect(base_url('login'), 'refresh');
        }
        
        $aspirasi = $this->aspirasi_model->show_user();
        $data = [
            'title'     => 'Aspirasi',
            'aspirasi'  => $aspirasi,
            'content'   => 'aspirasi/index'
        ];
        $this->load->view('layout/wrapper', $data, FALSE);
    }

}

/* End of file Aspirasi.php */

?>