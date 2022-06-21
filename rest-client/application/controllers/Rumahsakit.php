<?php

class Rumahsakit extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rumahsakit_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Rumah Sakit';
        $data['rumahsakit'] = $this->Rumahsakit_model->getAllRumahsakit();
        if( $this->input->post('keyword') ) {
            $data['rumahsakit'] = $this->Rumahsakit_model->cariDataMahasiswa();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('rumahsakit/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Rumahsakit';

        $this->form_validation->set_rules('nama_rs', 'Nama_Rs', 'required');
        $this->form_validation->set_rules('no_hp', 'No_hp', 'required|numeric');
        

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('rumahsakit/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Rumahsakit_model->tambahDataRumahsakit();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('rumahsakit');
        }
    }

    public function hapus($id)
    {
        $this->Rumahsakit_model->hapusDataRumahsakit($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('rumahsakit');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Rumahsakit';
        $data['rumahsakit'] = $this->Rumahsakit_model->getRumahsakitById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('rumahsakit/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah RumahSakit';
        $data['rumahsakit'] = $this->Rumahsakit_model->getRumahsakitById($id);
        $this->form_validation->set_rules('nama_pendiri', 'Nama_rs', 'required');
        $this->form_validation->set_rules('no_hp', 'No_hp', 'required|numeric');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('rumahsakit/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Rumahsakit_model->ubahDataRumahsakit();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('rumahsakit');
        }
    }

}
