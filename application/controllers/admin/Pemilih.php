<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilih extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
    }
    
    public function index()
    {
        $pemilih = $this->users_model->index();
        $data = [
            'title'     => 'Pemilih',
            'pemilih'   => $pemilih,
            'content'   => 'admin/pemilih/index'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

}

/* End of file Pemilih.php */

?>