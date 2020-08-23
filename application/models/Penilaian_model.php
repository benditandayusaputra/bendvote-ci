<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian_model extends CI_Model {

    public function index()
    {
        $this->db->select('penilaian.*, users.nama_user');
        $this->db->join('users', 'users.id_user = penilaian.id_user', 'left');
        return $this->db->get('penilaian')->result();
    }

    public function nilai($data)
    {
        $this->db->insert('penilaian', $data);
    }

}

/* End of file Penilaian_model.php */

?>