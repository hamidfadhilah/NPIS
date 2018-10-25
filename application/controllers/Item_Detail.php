<?php
class Item_Detail extends CI_Controller{
    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
          redirect(base_url("login/logout")); 
        }
        $this->load->model('m_item_detail');
        $this->load->model('m_item_master');
        $this->load->model('m_stock_opname');

    }
    function index(){
        $data['result'] = $this->m_item_detail->get_data();
        if($this->session->userdata('level') == "admin"){
          redirect(base_url("index")); 
        }else if($this->session->userdata('level') == "operator"){
            redirect(base_url("index"));
        }else if($this->session->userdata('level') == "supervisor"){
            $this->template->tampil_spv_master('v_item_detail',$data);
        }else if($this->session->userdata('level') == "admteknik"){
            redirect(base_url("index"));
        } else  {
          redirect(base_url("login"));  
        }
        
    }
    function tambah(){
        $data['item_name'] = $this->m_item_master->get_data();
        $data['result'] = $this->m_item_master->get_data_id_nama();
        $this->template->tampil_spv_master('form_add_item_detail',$data);
    }
    function add(){
       $item_detail_code    = "";
       $item_detail_name   = $this->input->post('item_detail_name');
       $item_name    = $this->input->post('item_name');
       $lead_time   = $this->input->post('lead_time');
       $packing_size    = $this->input->post('packing_size');
       $packing_unit   = $this->input->post('packing_unit');
       $rop           = $this->input->post('rop');
       $min_level  = $this->input->post('min_level');
       $min_order  = $this->input->post('min_order');
       $max_level  = $this->input->post('max_level');
       $req_month  = $this->input->post('req_month'); 
       $uom  = $this->input->post('uom');
       $manufacture  = $this->input->post('manufacture');
       $vendor  = $this->input->post('vendor');  
       $status  = $this->input->post('status');

       $data3['result'] = $this->m_item_master->get_data_item_code($item_name);
       foreach($data3['result'] as $row){
          $item_code = $row->item_code;
        }  

       $data = array('item_detail_code'=>$item_detail_code, 'item_detail_name'=>$item_detail_name, 'item_code'=>$item_code, 'lead_time'=>$lead_time, 'packing_size'=>$packing_size, 'packing_unit'=>$packing_unit, 'rop'=>$rop , 'min_level'=>$min_level, 'min_order'=>$min_order, 'max_level'=>$max_level, 'req_month'=>$req_month, 'uom'=>$uom , 'manufacture'=>$manufacture, 'vendor'=>$vendor, 'status'=>$status);
       $this->m_item_detail->insert($data);

       $data1['result'] = $this->m_item_detail->get_data_detail_code($item_detail_name);
       foreach($data1['result'] as $row){
          $detail_code = $row->item_detail_code;
        }
       $no_stock  = "";
       $qty       = 0;
       $status_item    = "Normal";
       $data2 = array('no_stock'=>$no_stock, 'item_code'=>$item_code,'item_detail_code'=>$detail_code, 'qty'=>$qty, 'status_item'=>$status_item);
       $this->m_stock_opname->insert($data2);
       redirect('Item_Detail/index');


    }
    function edit(){
        $item_detail_code = $this->uri->segment(3);
        $data['item_name'] = $this->m_item_master->get_data();
        $data['row'] = $this->m_item_detail->get_data_edit($item_detail_code);
        
        $data['result'] = $this->m_item_detail->get_data_item_code($item_detail_code);
        foreach($data['result'] as $row){
          $item_code = $row->item_code;
        }
        $data['item'] = $this->m_item_master->get_data_detail($item_code);

        $this->template->tampil_spv_master('form_edit_item_detail',$data);
    }
    function update(){
       $item_detail_code    = $this->input->post('item_detail_code');
       $item_detail_name   = $this->input->post('item_detail_name');
       $item_name    = $this->input->post('item_name');
       $lead_time   = $this->input->post('lead_time');
       $packing_size    = $this->input->post('packing_size');
       $packing_unit   = $this->input->post('packing_unit');
       $rop           = $this->input->post('rop');
       $min_level  = $this->input->post('min_level');
       $min_order  = $this->input->post('min_order');
       $max_level  = $this->input->post('max_level');
       $req_month  = $this->input->post('req_month'); 
       $uom  = $this->input->post('uom');
       $manufacture  = $this->input->post('manufacture');
       $vendor  = $this->input->post('vendor');       
       $status  = $this->input->post('status');

       $data3['result'] = $this->m_item_master->get_data_item_code($item_name);
       foreach($data3['result'] as $row){
          $item_code = $row->item_code;
        }

       $data = array('item_detail_code'=>$item_detail_code, 'item_detail_name'=>$item_detail_name, 'item_code'=>$item_code, 'lead_time'=>$lead_time, 'packing_size'=>$packing_size, 'packing_unit'=>$packing_unit, 'rop'=>$rop , 'min_level'=>$min_level, 'min_order'=>$min_order, 'max_level'=>$max_level, 'req_month'=>$req_month, 'uom'=>$uom , 'manufacture'=>$manufacture, 'vendor'=>$vendor, 'status'=>$status);
       $this->m_item_detail->update($data,$item_detail_code);
       redirect('Item_Detail/index');
    }
    function delete(){
        $item_detail_code = $this->uri->segment(3);
        $this->m_item_detail->delete($item_detail_code);
        redirect('Item_Detail/index');
    }
}
?>