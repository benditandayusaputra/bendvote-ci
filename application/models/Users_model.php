<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    public function index()
    {
        $this->db->select('users.*, kelas.nama_kelas');
        $this->db->join('kelas', 'kelas.id_kelas = users.id_kelas', 'left');
        return $this->db->get('users')->result();
    }

    public function pemilihan()
    {
        $this->db->select('COUNT(id_user) AS jumlah_user');
        return $this->db->get('users', ['status_pilih' => 0])->row();
    }

    public function detail($id_user)
    {
        return $this->db->get_where('users', ['id_user' => $id_user])->row();
    }

    public function login($nis, $token)
    {
        $where = [
            'nis'           => $nis,
            'token'         => $token
        ];
        $this->db->where($where);
        return $this->db->get('users')->row();
    }

    public function update($id_user, $data)
    {
        $this->db->update('users', $data, ['id_user' => $id_user]);
    }

}

/* End of file Users_model.php */

?>