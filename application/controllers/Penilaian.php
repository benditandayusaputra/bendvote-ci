<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('calon_model');
        $this->load->model('penilaian_model');
    }
    
    public function index()
    {
        $osis = $this->calon_model->osis();
        $data = [
            'title'     => 'Penilaian',
            'osis'      => $osis,
            'content'   => 'penilaian/index'
        ];
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function nilai()
    {
        $this->form_validation->set_rules('nilai', 'Nilai', 'trim|required');
        
        if ( $this->form_validation->run() ) {
            $data = [
                'id_user'   => $this->session->userdata('id_user'),
                'id_calon'  => $this->input->post('id_calon'),
                'nilai'     => $this->input->post('nilai')
            ];
            $this->penilaian_model->nilai($data);
            redirect(base_url('aspirasi'));
        }
    }

}

/* End of file Penilaian.php */

?>