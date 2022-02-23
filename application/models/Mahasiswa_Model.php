<?php

class Mahasiswa_Model extends CI_Model
{
    public function getAllMhs()
    {
        // Ambil semua data mahasiswa
        return $this->db->get('mahasiswa')->result_array();
    }

    public function tambahMhs()
    {
        // Siapkan data dari inputan form
        $data = [
            'nim' => htmlspecialchars($this->input->post('nim', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'jurusan' => htmlspecialchars($this->input->post('jurusan', true)),
            'image' => 'default.jpg'
        ];
        //Tambah data menggunakan fungsi insert
        $this->db->insert('mahasiswa', $data);
    }

    public function ubahMhs()
    {
        // Siapkan data dari inputan form
        $data = [
            'nim' => $this->input->post('nim', true),
            'nama' => $this->input->post('nama', true),
            'email' => $this->input->post('email', true),
            'jurusan' => $this->input->post('jurusan', true),
            'image' => 'default.jpg'
        ];
        //Ubah data menggunakan fungsi update
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa', $data);
    }

    // Membuat Fungsi getMhsById untuk mengambil data mahasiswa bardasarkan id
    public function getMhsById($id)
    {
        // Ambil Data Mahasiswa Berdasarkan Id
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    }

    // Fungsi Hapus
    public function hapusMhs($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('mahasiswa', ['id' => $id]);
    }

    public function cariData()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
}
