<?php
class Item_Master extends CI_Controller{
    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
          redirect(base_url("login/logout"));
        }
        $this->load->model('m_item_master');
    }
    function index(){
        $data['result'] = $this->m_item_master->get_data();
        if($this->session->userdata('level') == "admin"){
          redirect(base_url("index")); 
        }else if($this->session->userdata('level') == "operator"){
            redirect(base_url("index"));
        }else if($this->session->userdata('level') == "supervisor"){
            $this->template->tampil_spv_master('v_item_master',$data);
        }else if($this->session->userdata('level') == "admteknik"){
            redirect(base_url("index"));
        } else  {
          redirect(base_url("login"));  
        }
        
    }
    function tambah(){
        $this->template->tampil_spv_master('form_add_item_master');
    }
    function add(){
       $item_code    = "";
       $item_name   = $this->input->post('item_name');
       $inventory_unit    = $this->input->post('inventory_unit');
       $item_handling   = $this->input->post('item_handling');
       $specification           = $this->input->post('specification');
       $group1  = $this->input->post('group1');
       $group2  = $this->input->post('group2');
       $group3  = $this->input->post('group3');
       $group4  = $this->input->post('group4');       
       $data = array('item_code'=>$item_code, 'item_name'=>$item_name, 'inventory_unit'=>$inventory_unit, 'item_handling'=>$item_handling, 'specification'=>$specification, 'group1'=>$group1, 'group2'=>$group2, 'group3'=>$group3, 'group4'=>$group4);
       $this->m_item_master->insert($data);
       redirect('Item_Master/index');
    }
    function edit(){
        $item_code = $this->uri->segment(3);
        $data['row'] = $this->m_item_master->get_data_edit($item_code);
        $this->template->tampil_spv_master('form_edit_item_master',$data);
    }
    function update(){
       $item_code    = $this->input->post('item_code');
       $item_name   = $this->input->post('item_name');
       $inventory_unit    = $this->input->post('inventory_unit');
       $item_handling   = $this->input->post('item_handling');
       $specification           = $this->input->post('specification');
       $group1  = $this->input->post('group1');
       $group2  = $this->input->post('group2');
       $group3  = $this->input->post('group3');
       $group4  = $this->input->post('group4');       
       $data = array('item_code'=>$item_code, 'item_name'=>$item_name, 'inventory_unit'=>$inventory_unit, 'item_handling'=>$item_handling, 'specification'=>$specification, 'group1'=>$group1, 'group2'=>$group2, 'group3'=>$group3, 'group4'=>$group4);
       $this->m_item_master->update($data,$item_code);
       redirect('Item_Master/index');
    }
    function delete(){
        $item_code = $this->uri->segment(3);
        $this->m_item_master->delete($item_code);
        redirect('Item_Master/index');
    }
}
?>