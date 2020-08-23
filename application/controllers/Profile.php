<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->auth->cek_login();
    }
    
    public function index()
    {
        $user = $this->users_model->detail($this->session->userdata('id_user'));
        $data = [
            'title'     => 'Profile',
            'user'      => $user,
            'content'   => 'profile/index'
        ];
        $this->load->view('layout/wrapper', $data, FALSE);
    }

}

/* End of file Profile.php */

?>