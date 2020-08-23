<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Calon_model extends CI_Model {

    public function index()
    {
        return $this->db->get('calon')->result();
    }

    public function dashboard()
    {
        return $this->db->get_where('calon', ['jenis_calon' => '0'])->result();
    }

    public function osis()
    {
        return $this->db->get_where('calon', ['jenis_calon' => '1'])->row();
    }
    
    public function jumlah_calon()
    {
        $this->db->select('COUNT(id_calon) AS jumlah_calon');
        $this->db->where('jenis_calon', 0);
        return $this->db->get('calon')->row();
    }

    public function detail($slug_calon)
    {
        return $this->db->get_where('calon', ['slug_calon' => $slug_calon])->row();
    }

    public function insert($data)
    {
        $this->db->insert('calon', $data);
    }

    public function update($slug_calon, $data)
    {
        $this->db->update('calon', $data, ['slug_calon' => $slug_calon]);
    }

    public function delete($slug_calon)
    {
        $this->db->delete('calon', ['slug_calon' => $slug_calon]);
    }

}

/* End of file Calon_model.php */

?>