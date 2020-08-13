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
    }
    public function index()
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $data['judul'] = "Halaman Mahasiswa";
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function insertData()
    {
    }
}
