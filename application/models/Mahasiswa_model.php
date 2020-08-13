<?php
class Mahasiswa_model extends CI_Model
{

    //function untuk mengambil seluruh data mahasiswa
    public function getAllMahasiswa()
    {
        //menggunakan query builder select *   
        $query = $this->db->get('mahasiswa');
        //tampilkan hasil berupa array
        return $query->result_array();

        //atau tulis dalam 1 baris
        //return $this->db->get('mahasiswa')->result_array();
    }

    public function insertDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        ];
        $this->db->insert('mahasiswa', $data);
    }

    public function hapusDataMhs($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }
}
