<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Aspirasi_model extends CI_Model {

    public function index()
    {
        $this->db->select('aspirasi.*, users.nama_user');
        $this->db->join('users', 'users.id_user = aspirasi.id_user', 'left');
        return $this->db->get('aspirasi')->result();
    }

    public function aspirasi($data)
    {
        $this->db->insert('aspirasi', $data);
    }

    public function show_user()
    {
        $this->db->order_by('id_aspirasi', 'desc');
        $this->db->limit(3);
        return $this->db->get('aspirasi')->result();
    }

}

/* End of file Aspirasi_model.php */

?>