<?php
class m_material_issuance extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
    function get_data(){
        $query = $this->db->get("tb_material_issuance");
        return $query->result();
    }
    function get_data_item($no_issuance){
        $this->db->select('*');
        $this->db->where('tb_mi_item.no_issuance',$no_issuance);
        $this->db->join('tb_item_detail', 'tb_item_detail.item_detail_code = tb_mi_item.item_detail_code');
        $query = $this->db->get("tb_mi_item");
        return $query->result();
    }
    function get_data_edit($no_issuance){
        $this->db->where('no_issuance',$no_issuance);
        $query = $this->db->get("tb_material_issuance");
        return $query->row();
    }
    function get_data_status($no_issuance){
        $this->db->where('no_issuance',$no_issuance);
        $query = $this->db->get("tb_material_issuance");
        return $query->result();
    }
    function get_data_edit_item($no_issuance_detail){
        $this->db->where('no_issuance_detail',$no_issuance_detail);
        $query = $this->db->get("tb_mi_item");
        return $query->row();
    }
    function get_data_qty_item($no_issuance_detail){
        $this->db->where('no_issuance_detail',$no_issuance_detail);
        $query = $this->db->get("tb_mi_item");
        return $query->result();
    }
    function get_data_detail($no_issuance){
        $this->db->where('no_issuance',$no_issuance);
        $query = $this->db->get("tb_material_issuance");
        return $query->row();
    }
    function get_data_no_issuance($no_mr){
        $this->db->where('no_mr',$no_mr);
        $query = $this->db->get("tb_material_issuance");
        return $query->result();
    }
    function insert($dataIn){
        $this->db->insert('tb_material_issuance',$dataIn);
    }
    function insertItem($dataIn){
        $this->db->insert('tb_mi_item',$dataIn);
    }
    function update($dataIn, $no_issuance){
        $this->db->where('no_issuance',$no_issuance);
        $this->db->update('tb_material_issuance',$dataIn);
    }

    function updateDetail($dataIn, $no_issuance_detail){
        $this->db->where('no_issuance_detail',$no_issuance_detail);
        $this->db->update('tb_mi_item',$dataIn);
    }
    function delete($no_issuance){
        $this->db->delete('tb_material_issuance',array('no_issuance'=>$no_issuance));
    }
    function deleteDetail($no_issuance_detail){
        $this->db->delete('tb_mi_item',array('no_issuance_detail'=>$no_issuance_detail));
    }
}

