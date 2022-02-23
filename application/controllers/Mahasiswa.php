<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Memanggil Model Mahasiswa
        $this->load->model('Mahasiswa_Model', 'mahasiswa');
        // Memanggil Model Jurusan
        $this->load->model('Jurusan_Model', 'jurusan');
    }

    public function index()
    {
        // variabel $data yang memiliki element title
        $data['title'] = 'Data Mahasiswa';
        // variabel $data yang memiliki element nama
        $data['admin'] = [
            "nama" => 'Eka Wardana',
            "email" => 'ekaskitzo25@gmail.com'
        ];

        // variabel $data yang berisi element mahasiswa yang diambil dari model
        $data['mahasiswa'] = $this->mahasiswa->getAllMhs();
        if ($this->input->post('keyword')) {
            $data['mahasiswa'] = $this->mahasiswa->cariData();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    // Function detail data mahasiswa
    public function detail($id = null)
    {
        // variabel $data yang memiliki element title
        $data['title'] = 'Detail Data Mahasiswa';
        // variabel $data yang memiliki element nama
        $data['admin'] = [
            "nama" => 'Eka Wardana',
            "email" => 'ekaskitzo25@gmail.com'
        ];
        // Ambil mahasiswa berdasarkan id
        $data['mahasiswa'] = $this->mahasiswa->getMhsById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('templates/footer');
    }

    // Function tambah data mahasiswa
    public function tambah()
    {
        // variabel $data yang memiliki element title
        $data['title'] = 'Tambah Data Mahasiswa';
        // variabel $data yang memiliki element nama
        $data['admin'] = [
            "nama" => 'Eka Wardana',
            "email" => 'ekaskitzo25@gmail.com'
        ];
        $data['jurusan'] = $this->jurusan->getAllJurusan();

        //Rules validasinya jika input tidak sesuai
        $this->form_validation->set_rules('nim', 'NIM', 'required|min_length[3]', [
            'required' => 'NIM harus diisi',
            'min_length' => 'NIM terlalu Pendek'
        ]);

        //Rules validasinya jika input tidak sesuai
        $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[3]', [
            'required' => 'Nama harus diisi',
            'min_length' => 'Nama terlalu Pendek'
        ]);

        //Rules validasinya jika input tidak sesuai
        $this->form_validation->set_rules('email', 'Email', 'required|min_length[3]|valid_email', [
            'required' => 'Email harus diisi',
            'min_length' => 'Email terlalu Pendek',
            'valid_email' => 'Email Harus Benar'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            //Jika berhasil
            //Panggil fungsi tambah mahasiswa dari model mahasiswa
            $this->mahasiswa->tambahMhs();
            //Tampilkan session jika data berhasil ditambah
            $this->session->set_flashdata('pesan', 'Ditambah');
            //Kembalikan ke tampilan mahasiswa
            redirect('mahasiswa');
        }
    }

    // Function ubah data mahasiswa
    public function ubah($id = null)
    {
        // variabel $data yang memiliki element title
        $data['title'] = 'Ubah Data Mahasiswa';
        // variabel $data yang memiliki element admin
        $data['admin'] = [
            "nama" => 'Eka Wardana',
            "email" => 'ekaskitzo25@gmail.com'
        ];
        // Ambil semua data jurusan
        $data['jurusan'] = $this->jurusan->getAllJurusan();
        // Ambil mahasiswa berdasarkan id
        $data['mahasiswa'] = $this->mahasiswa->getMhsById($id);

        //Rules validasinya jika input tidak sesuai
        $this->form_validation->set_rules('nim', 'NIM', 'required|min_length[3]', [
            'required' => 'NIM harus diisi',
            'min_length' => 'NIM terlalu Pendek'
        ]);

        //Rules validasinya jika input tidak sesuai
        $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[3]', [
            'required' => 'Nama harus diisi',
            'min_length' => 'Nama terlalu Pendek'
        ]);

        //Rules validasinya jika input tidak sesuai
        $this->form_validation->set_rules('email', 'Email', 'required|min_length[3]|valid_email', [
            'required' => 'Email harus diisi',
            'min_length' => 'Email terlalu Pendek',
            'valid_email' => 'Email Harus Benar'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            //Jika berhasil
            //Panggil fungsi tambah mahasiswa dari model mahasiswa
            $this->mahasiswa->ubahMhs(['id' => $id]);
            //Tampilkan session jika data berhasil ditambah
            $this->session->set_flashdata('pesan', 'Diubah');
            //Kembalikan ke tampilan mahasiswa
            redirect('mahasiswa');
        }
    }

    // Function Hapus Data Mahasiswa
    public function hapus($id)
    {
        $this->mahasiswa->hapusMhs($id);
        //Tampilkan session jika data berhasil dihapus
        $this->session->set_flashdata('pesan', 'Dihapus');
        //Kembalikan ke tampilan mahasiswa
        redirect('mahasiswa');
    }
}
