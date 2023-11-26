<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_model extends CI_Model {

    public function getKontak()
    {
        // Gantilah 'nama_tabel' dengan nama tabel kontak di database Anda
        return $this->db->get('nama_tabel')->result();
    }
}
