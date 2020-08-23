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
        $aspirai = $this->aspirasi_model->index();
        $data = [
            'title'     => 'Aspirasi',
            'aspirasi'  => $aspirai,
            'content'   => 'admin/aspirasi/index'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

}

/* End of file Aspirasi.php */

?>