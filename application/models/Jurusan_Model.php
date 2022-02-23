<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan_Model extends CI_Model
{
    public function getAllJurusan()
    {
        return $this->db->get('jurusan')->result_array();
    }
}
