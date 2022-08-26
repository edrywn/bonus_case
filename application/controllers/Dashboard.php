<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');

        if ($this->session->userdata('role_id') != 1) {
            redirect('auth');
        }
    }


    public function index()
    {

        $data = [
            'instansi' => $this->m_admin->lihat('instansi')->result_array(),
            'instansi1' => $this->m_admin->lihat('instansi')->result_array(),
        ];

        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/index', $data);
        $this->load->view('admin/templates/footer');
    }
    public function insert()
    {
        $instansi = $this->input->post('instansi');
        $deskripsi = $this->input->post('deskripsi');



        $data = [
            'instansi' => $instansi,
            'deskripsi' => $deskripsi,

        ];
        $this->m_admin->tambah('instansi', $data);

        redirect('dashboard');
    }
    public function edit()
    {


        $id = $this->input->post('id');
        $instansi = $this->input->post('instansi');
        $deskripsi = $this->input->post('deskripsi');

        $data = [
            'instansi' => $instansi,
            'deskripsi' => $deskripsi,

        ];
        $this->m_admin->ubah(['id' => $id], 'instansi', $data);
        redirect('dashboard');
    }
    public function hapus($id)
    {
        $where = array('id' => $id);

        $this->m_admin->hapus($where, 'instansi');

        redirect('dashboard');
    }
}
