<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan extends CI_Controller {
    public function index(){
        //$data['kampus'] = "Universitas Universal";
        $data = array (
            'kampus' => "Universitas Universal",
            'email' => "info@uvers.ac.id",
            'telp' => "007"
        );
        $this->load->view('Hello_uvers', $data);
    }
    public function test(){
        echo "<h1>Menampilkan langsung dari Controller</h1>";
    }
}