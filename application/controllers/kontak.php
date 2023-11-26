<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kontak_model');
    }

    public function index()
    {
        $data['kontakkami'] = $this->Kontak_model->getKontak();
        $this->load->view('kontak_view', $data);
    }
}
