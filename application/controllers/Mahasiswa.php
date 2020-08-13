<?php
class Mahasiswa extends CI_Controller
{
    // membuat construct
    public function __construct()
    {
        parent::__construct();
        //load database, contoh saja karna idealnya tidak digunakan di controller
        //$this->load->database();

        //load model mahasiswa
        $this->load->model('Mahasiswa_model');

        //load form validation
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $data['judul'] = "Halaman Mahasiswa";
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function halamanTambah()
    {
        $data['judul'] = "Form Tambah Mahasiswa";
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->insertDataMahasiswa();
            redirect('mahasiswa');
        }
    }
}
