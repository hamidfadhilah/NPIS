<?php
class m_work_order_request extends CI_Model{
    function __construct() {
        parent::__construct();
    }
   
    function get_data(){
        $query = $this->db->get("tb_work_order_req");
        return $query->result();
    }
    function get_data_edit($no_wor){
        $this->db->where('no_wor',$no_wor);
        $query = $this->db->get("tb_work_order_req");
        return $query->row();
    }
    function get_data_status($no_wor){
        $this->db->where('no_wor',$no_wor);
        $query = $this->db->get("tb_work_order_req");
        return $query->result();
    }
    function get_data_no_wor(){
        $this->db->where('wor_status !=',"Prepare");
        $query = $this->db->get("tb_work_order_req");
        return $query->result();
    }
    function get_data_detail($no_wor){
        $this->db->where('no_wor',$no_wor);
        $query = $this->db->get("tb_work_order_req");
        return $query->row();
    }
    function insert($dataIn){
        $this->db->insert('tb_work_order_req',$dataIn);
    }
    function update($dataIn, $no_wor){
        $this->db->where('no_wor',$no_wor);
        $this->db->update('tb_work_order_req',$dataIn);
    }
    function delete($no_wor){
        $this->db->delete('tb_work_order_req',array('no_wor'=>$no_wor));
    }
}

