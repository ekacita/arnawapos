<?php


class loginModel extends CI_Model
{
    //Cek username dan Password dari Pengguna
    function authUser($username,$password){
        $query=$this->db->query("SELECT * FROM master_user WHERE username='$username' AND password='$password' LIMIT 1");
        return $query;
    }
    function cekLevel($username){
        $query=$this->db->query("SELECT level FROM master_user WHERE username='$username'");
        return $query;
    }
}