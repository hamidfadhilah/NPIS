<?php
class m_material_rcv extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
    function get_data(){
        $query = $this->db->get("tb_material_rcv");
        return $query->result();
    }
    function get_data_item($no_rcv){
        $this->db->select('*');
        $this->db->where('tb_rcv_item.no_rcv',$no_rcv);
        $this->db->join('tb_item_detail', 'tb_item_detail.item_detail_code = tb_rcv_item.item_detail_code');
        $query = $this->db->get("tb_rcv_item");
        return $query->result();
    }
    function get_data_status($no_rcv){
        $this->db->select('status');
        $this->db->where('no_rcv',$no_rcv);
        $query = $this->db->get("tb_material_rcv");
        return $query->result();
    }
    function get_data_edit($no_rcv){
        $this->db->where('no_rcv',$no_rcv);
        $query = $this->db->get("tb_material_rcv");
        return $query->row();
    }
    function get_data_edit_item($no_rcv_detail){
        $this->db->where('no_rcv_detail',$no_rcv_detail);
        $query = $this->db->get("tb_rcv_item");
        return $query->row();
    }
    function get_data_edit_qty_item($no_rcv_detail){
        $this->db->where('no_rcv_detail',$no_rcv_detail);
        $query = $this->db->get("tb_rcv_item");
        return $query->result();
    }
    function get_data_detail($no_rcv){
        $this->db->where('no_rcv',$no_rcv);
        $query = $this->db->get("tb_material_rcv");
        return $query->row();
    }
    function insert($dataIn){
        $this->db->insert('tb_material_rcv',$dataIn);
    }
    function insertItem($dataIn){
        $this->db->insert('tb_rcv_item',$dataIn);
    }
    function update($dataIn, $no_rcv){
        $this->db->where('no_rcv',$no_rcv);
        $this->db->update('tb_material_rcv',$dataIn);
    }

    function updateDetail($dataIn, $no_rcv_detail){
        $this->db->where('no_rcv_detail',$no_rcv_detail);
        $this->db->update('tb_rcv_item',$dataIn);
    }
    function delete($no_rcv){
        $this->db->delete('tb_material_rcv',array('no_rcv'=>$no_rcv));
    }
    function deleteDetail($no_rcv_detail){
        $this->db->delete('tb_rcv_item',array('no_rcv_detail'=>$no_rcv_detail));
    }
}

