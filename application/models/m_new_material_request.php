<?php
class m_new_material_request extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
    function get_data(){
        $this->db->where('req_dept', $this->session->userdata('dept'));
        $query = $this->db->get("tb_new_material_req");
        return $query->result();
    }
    
    function get_data_no_new_mr(){
        $this->db->where('new_mr_status !=',"Prepare");
        $query = $this->db->get("tb_new_material_req");
        return $query->result();
    }
    function get_data_status($no_new_mr){
        $this->db->where('no_new_mr',$no_new_mr);
        $query = $this->db->get("tb_new_material_req");
        return $query->result();
    }
    function get_data_edit($no_new_mr){
        $this->db->where('no_new_mr',$no_new_mr);
        $query = $this->db->get("tb_new_material_req");
        return $query->row();
    }
    function get_data_detail($no_new_mr){
        $this->db->where('no_new_mr',$no_new_mr);
        $query = $this->db->get("tb_new_material_req");
        return $query->row();
    }
    function insert($dataIn){
        $this->db->insert('tb_new_material_req',$dataIn);
    }
    function update($dataIn, $no_new_mr){
        $this->db->where('no_new_mr',$no_new_mr);
        $this->db->update('tb_new_material_req',$dataIn);
    }
    function delete($no_new_mr){
        $this->db->delete('tb_new_material_req',array('no_new_mr'=>$no_new_mr));
    }
}

