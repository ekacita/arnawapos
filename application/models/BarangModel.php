<?php


class BarangModel extends CI_Model
{
    function getAllUser(){
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    function updateUser($id, $data){
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }
    function  deleteUser($id){
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
    function  tambahUser($data){
        $this->db->insert($this->table, $data);
    }
}