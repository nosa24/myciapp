<?php
class Peoples_model extends CI_Model
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

        //atau dengan 1 baris
        //$this->db->delete('mahasiswa', ['id' => $id]);
    }

    public function getMhsbyId($id)
    {
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    }

    public function updateDataMahasiswa($id)
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        ];
        $this->db->where('id', $id);
        $this->db->update('mahasiswa', $data);
    }

    public function cariDataMhs()
    {
        $key = $this->input->post('keyword', true);
        $this->db->like('nama', $key);
        $this->db->or_like('nrp', $key);
        $this->db->or_like('jurusan', $key);
        $this->db->or_like('email', $key);
        return $this->db->get('mahasiswa')->result_array();
    }
}
