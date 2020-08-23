<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Calon extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('calon_model');
        $this->auth->cek_login_admin();
    }
    
    public function index()
    {
        $calon = $this->calon_model->index();
        $cln   = $this->calon_model->index();
        $data = [
            'title'     => 'Data Calon',
            'calon'     => $calon,
            'cln'       => $cln,
            'content'   => 'admin/calon/index'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function tambah()
    {
        $this->form_validation->set_message('required', '%s Harus Di Isi');
        $this->form_validation->set_rules('nama_calon', 'Nama Calon', 'trim|required');
        $this->form_validation->set_rules('visi', 'Visi', 'required');
        $this->form_validation->set_rules('misi', 'Misi', 'required');
        
        if ( $this->form_validation->run() ) {
            $config['upload_path']      = './uploads/';
            $config['file_ext_tolower'] = true;
            $config['file_name']        = date('YmdHis').$this->input->post('nama_calon');
            $config['allowed_types']    = 'gif|jpg|png|svg|jpeg';
            $config['max_size']         = '9000';
            $config['max_width']        = '9000';
            $config['max_height']       = '9000';
            
            $this->load->library('upload', $config);
            
            if ( !$this->upload->do_upload('foto_calon') ) {
                $error = $this->upload->display_errors();
                $data = [
                    'title'     => 'Data Calon',
                    'error'     => $error,
                    'content'   => 'admin/calon/tambah'
                ];
                $this->load->view('admin/layout/wrapper', $data, FALSE);
            } else {
                $uploadData = $this->upload->data();
                $slug_calon = url_title($this->input->post('nama_calon', true), 'dash', true);
                $data = [
                    'nama_calon'    => $this->input->post('nama_calon', true),
                    'slug_calon'    => $slug_calon,
                    'foto_calon'    => $uploadData['file_name'],
                    'visi'          => $this->input->post('visi'),
                    'misi'          => $this->input->post('misi'),
                    'jenis_calon'   => $this->input->post('jenis_calon')
                ];
                $this->calon_model->insert($data);
                $this->session->set_flashdata('sukses', 'Calon Berhasil Di Tambahkan');
                redirect(base_url('admin/calon'), 'refresh');
            }
            
        }

        $data = [
            'title'     => 'Data Calon',
            'content'   => 'admin/calon/tambah'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
        
    }

    public function edit($slug_calon)
    {
        $this->form_validation->set_message('required', '%s Harus Di Isi');
        $this->form_validation->set_rules('nama_calon', 'Nama Calon', 'trim|required');
        $this->form_validation->set_rules('visi', 'Visi', 'required');
        $this->form_validation->set_rules('misi', 'Misi', 'required');
        
        if ( $this->form_validation->run() ) {
            if ( empty($_FILES['foto_calon']['name']) ) {
                $slug_calon = url_title($this->input->post('nama_calon', true), 'dash', true);
                $data = [
                    'nama_calon'    => $this->input->post('nama_calon', true),
                    'slug_calon'    => $slug_calon,
                    'visi'          => $this->input->post('visi'),
                    'misi'          => $this->input->post('misi'),
                    'jenis_calon'   => $this->input->post('jenis_calon')
                ];
                $this->calon_model->update($slug_calon, $data);
                $this->session->set_flashdata('sukses', 'Calon Berhasil Di Edit');
                redirect(base_url('admin/calon'), 'refresh');
            } else {
                $config['upload_path']      = './uploads/';
                $config['file_ext_tolower'] = true;
                $config['file_name']        = date('YmdHis').$this->input->post('nama_calon');
                $config['allowed_types']    = 'gif|jpg|png|svg|jpeg';
                $config['max_size']         = '5000';
                $config['max_width']        = '5000';
                $config['max_height']       = '5000';
                
                $this->load->library('upload', $config);
                
                if ( !$this->upload->do_upload('foto_calon') ) {
                    $error = $this->upload->display_errors();
                    $data = [
                        'title'     => 'Data Calon',
                        'error'     => $error,
                        'content'   => 'admin/calon/tambah'
                    ];
                    $this->load->view('admin/layout/wrapper', $data, FALSE);
                } else {
                    $uploadData = $this->upload->data();
                    $slug_calon = url_title($this->input->post('nama_calon', true), 'dash', true);
                    $data = [
                        'nama_calon'    => $this->input->post('nama_calon', true),
                        'slug_calon'    => $slug_calon,
                        'foto_calon'    => $uploadData['file_name'],
                        'visi'          => $this->input->post('visi'),
                        'misi'          => $this->input->post('misi'),
                        'jenis_calon'   => $this->input->post('jenis_calon')
                    ];
                    $this->calon_model->update($slug_calon, $data);
                    $this->session->set_flashdata('sukses', 'Calon Berhasil Di Edit');
                    redirect(base_url('admin/calon'), 'refresh');
                }
            }
            
        }

        $calon = $this->calon_model->detail($slug_calon);
        $data = [
            'title'     => 'Data Calon',
            'calon'     => $calon,
            'content'   => 'admin/calon/edit'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function hapus($slug_calon)
    {
        $this->calon_model->delete($slug_calon);    
        $this->session->set_flashdata('sukses', 'Data Berhasil Di Hapus');
        redirect(base_url('admin/calon/index'), 'refresh');
    }

}

/* End of file Calon.php */

?>