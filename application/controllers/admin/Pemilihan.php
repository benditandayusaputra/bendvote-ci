<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilihan extends CI_Controller {

    public function index()
    {
        $users  = $this->users_model->pemilihan();
        $data = [
            'title'     => 'Pemilihan',
            'users'     => $users,
            'content'   => 'admin/pemilihan/index'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

}

/* End of file Pemilihan.php */

?>