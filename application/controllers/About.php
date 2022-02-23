<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function index()
    {
        // variabel $data yang memiliki element title
        $data['title'] = 'Halaman About';
        // variabel $data yang memiliki element admin
        $data['admin'] = [
            "nama" => 'Eka Wardana',
            "email" => 'ekaskitzo25@gmail.com'
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('about/index', $data);
        $this->load->view('templates/footer');
    }
}
