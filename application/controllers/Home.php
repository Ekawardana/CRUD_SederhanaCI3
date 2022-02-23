<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        // variabel $data yang memiliki element title
        $data['title'] = 'Halaman Home';
        // variabel $data yang memiliki element nama
        $data['admin'] = [
            "nama" => 'Eka Wardana',
            "email" => 'ekaskitzo25@gmail.com'
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}
