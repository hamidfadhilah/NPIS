<?php
class m_item_master extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    // function get_data($num, $offset){
    //     $query = $this->db->get("tb_item_master", $num, $offset);
    //     return $query->result();
    // }
    function get_data(){
        $query = $this->db->get("tb_item_master");
        return $query->result();
    }
    function get_data_id_nama(){
        $this->db->select('item_code, item_name');
        $query = $this->db->get("tb_item_master");
        return $query->result();
    }
    function get_data_edit($item_code){
        $this->db->where('item_code',$item_code);
        $query = $this->db->get("tb_item_master");
        return $query->row();
    }
    function get_data_item_code($item_name){
        $this->db->where('item_name',$item_name);
        $query = $this->db->get("tb_item_master");
        return $query->result();
    }
    function get_data_detail($item_code){
        $this->db->where('item_code',$item_code);
        $query = $this->db->get("tb_item_master");
        return $query->row();
    }
    function insert($dataIn){
        $this->db->insert('tb_item_master',$dataIn);
    }
    function update($dataIn, $item_code){
        $this->db->where('item_code',$item_code);
        $this->db->update('tb_item_master',$dataIn);
    }
    function delete($item_code){
        $this->db->delete('tb_item_master',array('item_code'=>$item_code));
    }
}

