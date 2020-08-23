<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilihan extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('calon_model');
        $this->load->model('pemilihan_model');
    }
    
    public function index()
    {
        $calon  = $this->calon_model->dashboard();
        $cln    = $this->calon_model->dashboard();
        $data = [
            'title'     => 'Pemilihan',
            'calon'     => $calon,
            'cln'       => $cln,
            'content'   => 'pemilihan/index'
        ];
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function pilih($slug_calon)
    {
        $data['status_pilih'] = 1;
        $this->users_model->update($this->session->userdata('id_user'), $data);
        $calon = $this->calon_model->detail($slug_calon);
        $data = [
            'id_user'   => $this->session->userdata('id_user'),
            'id_calon'  => $calon->id_calon
        ];
        $this->pemilihan_model->pilih($data);
        redirect(base_url('penilaian'));
    }

}

/* End of file Pemilihan.php */

?>