<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_model extends CI_Model {

    public function index()
    {
        return $this->db->get('kelas')->result();
    }

    public function detail($id_kelas)
    {
        return $this->db->get_where('kelas', ['id_kelas' => $id_kelas])->row();
    }

    public function insert($data)
    {
        $this->db->insert('kelas', $data);
    }

    public function update($id_kelas, $data)
    {
        $this->db->update('kelas', $data, ['id_kelas' => $id_kelas]);
    }

    public function delete($id_kelas)
    {
        $this->db->delete('kelas', ['id_kelas' => $id_kelas]);
    }

}

/* End of file Kelas_model.php */

?>