<?php
class Peoples extends CI_Controller
{
    // membuat construct
    public function __construct()
    {
        parent::__construct();
        //load database, contoh saja karna idealnya tidak digunakan di controller
        //$this->load->database();

        //load model mahasiswa
        $this->load->model('Peoples_model');

        //load form validation
        //$this->load->library('form_validation');
    }
    public function index()
    {
        $data['peoples'] = $this->Peoples_model->getAllMahasiswa();
        if ($this->input->post('keyword')) {
            $data['peoples'] = $this->Peoples_model->cariDataMhs();
        }
        $data['judul'] = "List of Peoples";
        $this->load->view('templates/header', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('templates/footer');
    }
}
