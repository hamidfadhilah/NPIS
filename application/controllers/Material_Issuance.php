<?php
class Material_Issuance extends CI_Controller{
    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
          redirect(base_url("login/logout"));
        }
        $this->load->model('m_material_issuance');
        $this->load->model('m_material_request');
        $this->load->model('m_item_detail');
        $this->load->model('m_stock_opname');
    }
    function index(){
        $data['result'] = $this->m_material_issuance->get_data();

        if($this->session->userdata('level') == "admin"){
          redirect(base_url("index")); 
        }else if($this->session->userdata('level') == "operator"){
            redirect(base_url("index"));
        }else if($this->session->userdata('level') == "supervisor"){
            $this->template->tampil_spv_inventory('v_material_issuance',$data);
        }else if($this->session->userdata('level') == "admteknik"){
            $this->template->tampil_admteknik_inventory('v_material_issuance',$data);
        } else  {
          redirect(base_url("login"));
        }
    }

    function indexDetail(){
        $data['result'] = $this->m_material_request->get_data_item();
        $this->template->tampil_spv_inventory('form_detail_material_issuance',$data);
    }
    function tambah(){
        $data['mr'] = $this->m_material_issuance->get_data();
        $data['result'] = $this->m_material_request->get_data_no_mr();
        $this->template->tampil_spv_inventory('form_add_material_issuance',$data);
    }
    function add(){
       $no_issuance    = "";
       $no_mr   = $this->input->post('no_mr');
       $issuance_date    = $this->input->post('issuance_date');
       $issuance_status   = "Not Complete";
       $wh_adm    = $this->input->post('wh_adm');
       $wh_spv    = $this->input->post('wh_spv'); 
       $data = array('no_issuance'=>$no_issuance, 'no_mr'=>$no_mr, 'issuance_date'=>$issuance_date, 'issuance_status'=>$issuance_status, 'wh_adm'=>$wh_adm, 'wh_spv'=>$wh_spv);
       $this->m_material_issuance->insert($data);

       $data1['result'] = $this->m_material_issuance->get_data_no_issuance($no_mr);
       foreach($data1['result'] as $row){
          $no_issuance = $row->no_issuance;
        }
       $data2['result'] = $this->m_material_request->get_data_item($no_mr);
       foreach($data2['result'] as $row1){
           $no_issuance_detail    = "";
           $item_detail_code  = $row1->item_detail_code;
           $request_qty   = $row1->qty;
           $issuance_qty   = "";
         
           $data3 = array('no_issuance_detail'=>$no_issuance_detail, 'no_issuance'=>$no_issuance, 'item_detail_code'=>$item_detail_code, 'request_qty'=>$request_qty, 'issuance_qty'=>$issuance_qty, 'status_issuance_item'=>"Not Complete");
           $this->m_material_issuance->insertItem($data3);
       }
       
       redirect('material_issuance/detail/'.$no_issuance);
    }

    function updateItem(){
       $no_issuance_detail    = $this->input->post('no_issuance_detail');
       $no_issuance    = $this->input->post('no_issuance');
       $item_detail_name  = $this->input->post('item_detail_name');
       $request_qty = $this->input->post('request_qty');
       $issuance_qty   = $this->input->post('issuance_qty');

       $data['iss_item'] = $this->m_material_issuance->get_data_qty_item($no_issuance_detail);
       foreach($data['iss_item'] as $row){
          $iss_qty_before = $row->issuance_qty;
        }

       if ($request_qty == $issuance_qty) {
         $status = "Complete";
         } else
          $status = "Not Complete";

       $data1['result'] = $this->m_item_detail->get_data_detail_code($item_detail_name);
       foreach($data1['result'] as $row){
          $item_detail_code = $row->item_detail_code;
        } 
         
       $data = array('no_issuance_detail'=>$no_issuance_detail, 'no_issuance'=>$no_issuance, 'item_detail_code'=>$item_detail_code, 'issuance_qty'=>$issuance_qty, 'status_issuance_item'=>$status);
       $this->m_material_issuance->updateDetail($data,$no_issuance_detail);
       
       $data['stock'] = $this->m_stock_opname->get_data_edit($item_detail_code);
       foreach($data['stock'] as $row){
          $no_stock = $row->no_stock;
          $item_code = $row->item_code;
          $qty = $row->qty;
          $status_item = $row->status_item;
        }
       
       if ($iss_qty_before > $issuance_qty) {
          $issuance_qty_new = $iss_qty_before - $issuance_qty; 
          $qty = $qty + $issuance_qty_new;        
       } else if ($iss_qty_before < $issuance_qty) {
          $issuance_qty_new = $issuance_qty - $iss_qty_before;  
          $qty = $qty - $issuance_qty_new;
       }

       $data2 = array('no_stock'=>$no_stock, 'item_code'=>$item_code, 'item_detail_code'=>$item_detail_code, 'qty'=>$qty, 'status_item'=>$status_item);
       $this->m_stock_opname->update($data2,$no_stock);

       redirect('material_issuance/detail/'.$no_issuance);
    }

    function edit(){
        $no_issuance = $this->uri->segment(3);
        $data['result'] = $this->m_material_issuance->get_data_status($no_issuance);
        $data['item'] = $this->m_material_issuance->get_data_item($no_issuance);
        foreach($data['result'] as $row){
          if ($row->issuance_status == "Complete") {
            redirect('index');
          } else {
            $data['row'] = $this->m_material_issuance->get_data_edit($no_issuance);
            $this->template->tampil_spv_inventory('form_edit_material_issuance',$data);
          }
        }
    }

    function detail(){
        $no_issuance = $this->uri->segment(3);
        $data['result'] = $this->m_material_issuance->get_data_item($no_issuance);
        $data['row'] = $this->m_material_issuance->get_data_edit($no_issuance);
        $this->template->tampil_spv_inventory('form_detail_material_issuance',$data);
    }
    function update(){
       $no_issuance    = $this->input->post('no_issuance');
       $no_mr   = $this->input->post('no_mr');
       $issuance_date    = $this->input->post('issuance_date');
       $issuance_status   = $this->input->post('issuance_status');
       $wh_adm    = $this->input->post('wh_adm');
       $wh_spv    = $this->input->post('wh_spv'); 
       $data = array('no_issuance'=>$no_issuance, 'no_mr'=>$no_mr, 'issuance_date'=>$issuance_date, 'issuance_status'=>$issuance_status, 'wh_adm'=>$wh_adm, 'wh_spv'=>$wh_spv);
       $this->m_material_issuance->update($data,$no_issuance);
       redirect('material_issuance/index');
    }
    function delete(){
        $no_issuance = $this->uri->segment(3);
        $data['result'] = $this->m_material_issuance->get_data_status($no_issuance);
        foreach($data['result'] as $row){
          if ($row->issuance_status == "Complete") {
            redirect('index');
          } else {
            $this->m_material_issuance->delete($no_issuance);
            redirect('material_issuance/index');
          }
        }
    }

}
?>