<?php
class m_pr_opex extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
    function get_data(){
        $query = $this->db->get("tb_pr_opex");
        return $query->result();
    }
    function get_data_item($pr_number){
        $this->db->select('*');
        $this->db->where('tb_pr_item.pr_number',$pr_number);
        $this->db->join('tb_item_detail', 'tb_item_detail.item_detail_code = tb_pr_item.item_detail_code');
        $query = $this->db->get("tb_pr_item");
        return $query->result();
    }
    function get_data_item_edit($pr_number){
        $this->db->select('*');
        $this->db->where('tb_pr_item.pr_number',$pr_number);
        $this->db->join('tb_item_detail', 'tb_item_detail.item_detail_code = tb_pr_item.item_detail_code');
        $query = $this->db->get("tb_pr_item");
        return $query->num_rows();
    }
    function get_data_po_number(){
        $this->db->select('po_number');
        $this->db->not_like('po_number', 'pr', 'after');
        $this->db->where('pr_status',"Complete");
        $query = $this->db->get("tb_pr_opex");
        return $query->result();
    }
    function get_data_pr_number($po_number){
        $this->db->where('po_number',$po_number);
        $query = $this->db->get("tb_pr_opex");
        return $query->result();
    }
    function get_data_pr_status($pr_number){
        $this->db->select('pr_status');
        $this->db->where('pr_number',$pr_number);
        $query = $this->db->get("tb_pr_opex");
        return $query->result();
    }
    function get_data_edit($pr_number){
        $this->db->where('pr_number',$pr_number);
        $query = $this->db->get("tb_pr_opex");
        return $query->row();
    }
    function get_data_edit_item($pr_detail_code){
        $this->db->where('pr_detail_code',$pr_detail_code);
        $query = $this->db->get("tb_pr_item");
        return $query->row();
    }
    function get_data_detail($pr_number){
        $this->db->where('pr_number',$pr_number);
        $query = $this->db->get("tb_pr_opex");
        return $query->row();
    }
    function insert($dataIn){
        $this->db->insert('tb_pr_opex',$dataIn);
    }
    function insertItem($dataIn){
        $this->db->insert('tb_pr_item',$dataIn);
    }
    function update($dataIn, $pr_number){
        $this->db->where('pr_number',$pr_number);
        $this->db->update('tb_pr_opex',$dataIn);
    }

    function updateDetail($dataIn, $pr_detail_code){
        $this->db->where('pr_detail_code',$pr_detail_code);
        $this->db->update('tb_pr_item',$dataIn);
    }
    function delete($pr_number){
        $this->db->delete('tb_pr_opex',array('pr_number'=>$pr_number));
    }
    function deleteDetail($pr_detail_code){
        $this->db->delete('tb_pr_item',array('pr_detail_code'=>$pr_detail_code));
    }
}

