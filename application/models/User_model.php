<?php
class User_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    function get_data(){
        $query = $this->db->get("tb_user");
        return $query->result();
    }
    function get_data_edit($user_id){
        $this->db->where('user_id',$user_id);
        $query = $this->db->get("tb_user");
        return $query->row();
    }
    function get_data_detail($user_id){
        $this->db->where('user_id',$user_id);
        $query = $this->db->get("tb_user");
        return $query->row();
    }
    function get_data_user($username){
        $this->db->where('username',$username);
        $query = $this->db->get("tb_user");
        return $query->result();
    }
    function insert($dataIn){
        $this->db->insert('tb_user',$dataIn);
    }
    function update($dataIn, $user_id){
        $this->db->where('user_id',$user_id);
        $this->db->update('tb_user',$dataIn);
    }
    function delete($user_id){
        $this->db->delete('tb_user',array('user_id'=>$user_id));
    }
    function get_level($username){
        $this->db->where('username',$username);
        $query = $this->db->get("tb_user");
        $result = $query->row();
        return $result->level;
    }
}

