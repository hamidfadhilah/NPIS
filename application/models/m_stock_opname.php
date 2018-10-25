<?php
class m_stock_opname extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
    function get_data(){
        $this->db->select('*');
        $this->db->join('tb_item_detail', 'tb_item_detail.item_detail_code = tb_stock_opname.item_detail_code');
        $query = $this->db->get("tb_stock_opname");
        return $query->result();
    }
    function insert($dataIn){
        $this->db->insert('tb_stock_opname',$dataIn);
    }
    function get_data_edit($item_detail_code){
        $this->db->where('item_detail_code',$item_detail_code);
        $query = $this->db->get("tb_stock_opname");
        return $query->result();
    }
    function update($dataIn, $no_stock){
        $this->db->where('no_stock',$no_stock);
        $this->db->update('tb_stock_opname',$dataIn);
    }
    function getLastDate(){
        $query = $this->db->query("SELECT date FROM tb_history_stock ORDER BY no DESC limit 1");
        return $query->row();
    }
    function deleteStock(){
        $this->db->delete('tb_history_stock',array('date'=>date('Y-m-d')));
    }
   function insertStock($dataIn){
        $this->db->insert('tb_history_stock',$dataIn);
    }
}

