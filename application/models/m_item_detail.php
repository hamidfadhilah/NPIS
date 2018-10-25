<?php
class m_item_detail extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
    function get_data(){
        $query = $this->db->get("tb_item_detail");
        return $query->result();
    }
    function get_data_edit($item_detail_code){
        $this->db->where('item_detail_code',$item_detail_code);
        $query = $this->db->get("tb_item_detail");
        return $query->row();
    }
    function get_data_item_code($item_detail_code){
        $this->db->where('item_detail_code',$item_detail_code);
        $query = $this->db->get("tb_item_detail");
        return $query->result();
    }
    function get_data_detail($item_detail_code){
        $this->db->where('item_detail_code',$item_detail_code);
        $query = $this->db->get("tb_item_detail");
        return $query->row();
    }
    function get_data_detail_code($item_detail_name){
        $this->db->where('item_detail_name',$item_detail_name);
        $query = $this->db->get("tb_item_detail");
        return $query->result();
    }
    function insert($dataIn){
        $this->db->insert('tb_item_detail',$dataIn);
    }
    function update($dataIn, $item_detail_code){
        $this->db->where('item_detail_code',$item_detail_code);
        $this->db->update('tb_item_detail',$dataIn);
    }
    function delete($item_detail_code){
        $this->db->delete('tb_item_detail',array('item_detail_code'=>$item_detail_code));
    }
}

