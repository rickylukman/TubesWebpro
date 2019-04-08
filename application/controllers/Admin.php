<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        //load model admin
        parent::__construct();
        $this->load->model('M_Admin');
    }

    public $data = array(
        // "nim" => "1301174125",
        // "nama" => "Alvianda Ricky LP",
        // "kampus"=>"Telkom University",
        "kita" =>"Apa Hayo"
    );

    public function index()
    {
        $data['kita'] = '';
        $this->load->view('page_header', $data);
        $this->load->view('page_loginAd');
    }

    public function login() 
    {
        $nim= $this->input->post("nim");
        $pass = $this->input->post("pass");
        $cek = $this->M_Admin->ceklogin($nim, $pass);
        if ($cek > 0) {
            redirect("Home/index");
        } else {
            echo "COAKSAKSK";
        }
     }
 
     public function logout(){
         $this->simple_login->logout();
     }        

}