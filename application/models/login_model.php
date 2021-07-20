<?php 

class Login_model extends CI_Model{
    function cek_login($table,$where){
        return $this->db->get_where($table,$where);
    }

    function register($table,$data){
        return $this->db->insert($table,$data);
    }
}
?>