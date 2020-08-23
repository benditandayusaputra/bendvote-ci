<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilihan_model extends CI_Model {

    public function pilih($data)
    {
        $this->db->insert('pemilihan', $data);
    }

}

/* End of file Pemilihan_model.php */

?>