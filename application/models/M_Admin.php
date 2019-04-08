<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model
{
    public function ceklogin($nim,$pass) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('nim',$nim);
        $this->db->where('pass',$pass);
        $query = $this->db->get();
        return $query->num_rows();
    }
}