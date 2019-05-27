<?php


class loginModel extends CI_Model
{
    //Cek username dan Password dari Pengguna
    function authUser($username,$password){
        $query=$this->db->query("SELECT * FROM master_user WHERE username='$username' AND password='$password' LIMIT 1");
        $query->num_rows();
        return $query;
    }
    function cekLevel($username){
        $load =$this->db->where('username',$username);
        return $this->db->get('master_user',$load);
    }
}