<?php
class Peoples extends CI_Controller
{
    public function index()
    {
        //ambil data keyword
        if ($this->input->post('search')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        //load models
        $this->load->model('Peoples_model');

        //pagination load
        $this->load->library('pagination');

        //pagination config, Note : ingat tambah index di akhirannya.
        //$config['total_rows'] = $this->Peoples_model->getCountPeoples();
        //menghitung jumlah baris di query terakhir
        $this->db->like('name', $data['keyword']);
        $this->db->or_like('email', $data['keyword']);
        $this->db->or_like('address', $data['keyword']);
        $this->db->from('peoples');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 12;

        //inisialisasi pagination
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->Peoples_model->getPeoples($config['per_page'], $data['start'], $data['keyword']);
        $data['judul'] = "List of Peoples";
        $this->load->view('templates/header', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('templates/footer');
    }
}
