<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Users_model');
        is_logged();
    }

    public function index() {

        $data = array(
            'content' => 'backend/dashboard',

        );
        $this->load->view('layout_backend.php', $data);
    }

    public function cetak() {
        $isi = "<h1>Hasil Cetak PDF dari Channel Peternak Kode</h1><br>
        <p>Jangan lupa subscribe agar temen2 terus dapet video2 terbaru yaa ;)</p>";
        export_to_pdf($isi, "PETERNAK KODE", "INI HASIL PDFNYA");
    }

}
