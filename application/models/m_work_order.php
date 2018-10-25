<?php
class m_work_order extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
    function get_data(){
        $query = $this->db->get("tb_work_order");
        return $query->result();
    }
    function get_data_wo(){
        $this->db->where('wo_status !=' , "Prepare");
        $query = $this->db->get("tb_work_order");
        return $query->result();
    }
    function get_data_dept(){
        $this->db->where('req_dept', $this->session->userdata('dept'));
        $query = $this->db->get("tb_work_order");
        return $query->result();
    }

    function get_data_item($no_wo){
        $this->db->select('*');
        $this->db->where('tb_used_part.no_wo',$no_wo);
        $this->db->join('tb_item_detail', 'tb_item_detail.item_detail_code = tb_used_part.item_detail_code');
        $query = $this->db->get("tb_used_part");
        return $query->result();
    }

    function get_data_employee($no_wo){
        $this->db->where('no_wo',$no_wo);
        $query = $this->db->get("tb_assigned_employee");
        return $query->result();
    }

    function get_data_equipment($no_wo){
        $this->db->select('*');
        $this->db->where('tb_used_equipment.no_wo',$no_wo);
        $this->db->join('tb_item_detail', 'tb_item_detail.item_detail_code = tb_used_equipment.item_detail_code');
        $query = $this->db->get("tb_used_equipment");
        return $query->result();
    }
    
    function get_data_no_wo($no_wor){
        $this->db->where('no_wor',$no_wor);
        $query = $this->db->get("tb_work_order");
        return $query->result();
    }
    function get_data_edit($no_wo){
        $this->db->where('no_wo',$no_wo);
        $query = $this->db->get("tb_work_order");
        return $query->row();
    }
    function get_data_wo_status($no_wo){
        $this->db->where('no_wo',$no_wo);
        $query = $this->db->get("tb_work_order");
        return $query->result();
    }
    function get_data_edit_item($no_part){
        $this->db->where('no_part',$no_part);
        $query = $this->db->get("tb_used_part");
        return $query->row();
    }
    function get_data_qty_item($no_part){
        $this->db->where('no_part',$no_part);
        $query = $this->db->get("tb_used_part");
        return $query->result();
    }
    function get_data_detail($no_wo){
        $this->db->where('no_wo',$no_wo);
        $query = $this->db->get("tb_work_order");
        return $query->row();
    }
    function insert($dataIn){
        $this->db->insert('tb_work_order',$dataIn);
    }
    function insertItem($dataIn){
        $this->db->insert('tb_used_part',$dataIn);
    }

    function insertEmployee($dataIn){
        $this->db->insert('tb_assigned_employee',$dataIn);
    }

    function insertEquipment($dataIn){
        $this->db->insert('tb_used_equipment',$dataIn);
    }

    function update($dataIn, $no_wo){
        $this->db->where('no_wo',$no_wo);
        $this->db->update('tb_work_order',$dataIn);
    }

    function updateDetail($dataIn, $no_part){
        $this->db->where('no_part',$no_part);
        $this->db->update('tb_used_part',$dataIn);
    }

    function updateEmployee($dataIn, $employee_code){
        $this->db->where('employee_code',$employee_code);
        $this->db->update('tb_assigned_employee',$dataIn);
    }

    function updateEquipment($dataIn, $equipment_code){
        $this->db->where('equipment_code',$equipment_code);
        $this->db->update('tb_used_equipment',$dataIn);
    }

    function delete($no_wo){
        $this->db->delete('tb_work_order',array('no_wo'=>$no_wo));
    }

    function deleteDetail($no_part){
        $this->db->delete('tb_used_part',array('no_part'=>$no_part));
    }

    function deleteEmployee($employee_code){
        $this->db->delete('tb_assigned_employee',array('employee_code'=>$employee_code));
    }

    function deleteEquipment($equipment_code){
        $this->db->delete('tb_used_equipment',array('equipment_code'=>$equipment_code));
    }
}

