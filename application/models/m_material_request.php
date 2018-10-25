<?php
class m_material_request extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
    function get_data(){
        $this->db->where('req_dept', $this->session->userdata('dept'));
        $query = $this->db->get("tb_material_req");
        return $query->result();
    }
    function get_data_item($no_mr){
        $this->db->select('*');
        $this->db->where('tb_mr_item.no_mr',$no_mr);
        $this->db->join('tb_item_detail', 'tb_item_detail.item_detail_code = tb_mr_item.item_detail_code');
        $query = $this->db->get("tb_mr_item");
        return $query->result();
    }
    function get_data_item_edit($no_mr){
        $this->db->select('*');
        $this->db->where('tb_mr_item.no_mr',$no_mr);
        $this->db->join('tb_item_detail', 'tb_item_detail.item_detail_code = tb_mr_item.item_detail_code');
        $query = $this->db->get("tb_mr_item");
        return $query->num_rows();
    }
    function get_data_no_mr(){
        $this->db->where('mr_status !=',"Prepare");
        $query = $this->db->get("tb_material_req");
        return $query->result();
    }
    function get_data_status($no_mr){
        $this->db->where('no_mr',$no_mr);
        $query = $this->db->get("tb_material_req");
        return $query->result();
    }
    function get_data_edit($no_mr){
        $this->db->where('no_mr',$no_mr);
        $query = $this->db->get("tb_material_req");
        return $query->row();
    }
    function get_data_edit_item($no_mr_detail){
        $this->db->where('no_mr_detail',$no_mr_detail);
        $query = $this->db->get("tb_mr_item");
        return $query->row();
    }
    function get_data_detail($no_mr){
        $this->db->where('no_mr',$no_mr);
        $query = $this->db->get("tb_material_req");
        return $query->row();
    }
    function insert($dataIn){
        $this->db->insert('tb_material_req',$dataIn);
    }
    function insertItem($dataIn){
        $this->db->insert('tb_mr_item',$dataIn);
    }
    function update($dataIn, $no_mr){
        $this->db->where('no_mr',$no_mr);
        $this->db->update('tb_material_req',$dataIn);
    }

    function updateDetail($dataIn, $no_mr_detail){
        $this->db->where('no_mr_detail',$no_mr_detail);
        $this->db->update('tb_mr_item',$dataIn);
    }
    function delete($no_mr){
        $this->db->delete('tb_material_req',array('no_mr'=>$no_mr));
    }
    function deleteDetail($no_mr_detail){
        $this->db->delete('tb_mr_item',array('no_mr_detail'=>$no_mr_detail));
    }
}

