<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('penilaian_model');
    }
    
    public function index()
    {
        $nilai  = $this->penilaian_model->index();
        $data = [
            'title'     => 'Penilaian',
            'nilai'     => $nilai,
            'content'   => 'admin/penilaian/index'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

}

/* End of file Penilaian.php */

?>