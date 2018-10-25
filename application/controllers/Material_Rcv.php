<?php
class Material_Rcv extends CI_Controller{
    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
          redirect(base_url("login/logout"));
        }
        $this->load->model('m_material_rcv');
        $this->load->model('m_pr_opex');
        $this->load->model('m_item_detail');
        $this->load->model('m_stock_opname');
    }
    function index(){
        $data['result'] = $this->m_material_rcv->get_data();

        if($this->session->userdata('level') == "admin"){
          redirect(base_url("index")); 
        }else if($this->session->userdata('level') == "operator"){
            redirect(base_url("index"));
        }else if($this->session->userdata('level') == "supervisor"){
            $this->template->tampil_spv_receiving('v_material_rcv',$data);
        }else if($this->session->userdata('level') == "admteknik"){
            $this->template->tampil_admteknik_receiving('v_material_rcv',$data);
        } else  {
          redirect(base_url("login"));  
        }        
    }

    function indexDetail(){        
        $data['result'] = $this->m_pr_opex->get_data_item();
        $this->template->tampil_spv_receiving('form_detail_material_rcv',$data);
    }
    function tambah(){
        $data['rcv'] = $this->m_material_rcv->get_data();
        $data['result'] = $this->m_pr_opex->get_data_po_number();
        $this->template->tampil_spv_receiving('form_add_material_rcv',$data);
    }
    function add(){
       $no_rcv    = $this->input->post('no_rcv');
       $po_number   = $this->input->post('po_number');
       $do_number    = $this->input->post('do_number');
       $rcv_date   = $this->input->post('rcv_date');
       $status    = $this->input->post('status'); 
       $data = array('no_rcv'=>$no_rcv, 'po_number'=>$po_number, 'do_number'=>$do_number, 'rcv_date'=>$rcv_date, 'status'=>$status);
       $this->m_material_rcv->insert($data);

       $data1['result'] = $this->m_pr_opex->get_data_pr_number($po_number);
       foreach($data1['result'] as $row){
          $pr_number = $row->pr_number;
        }
       $data2['result'] = $this->m_pr_opex->get_data_item($pr_number);
       foreach($data2['result'] as $row1){
           $no_rcv_detail    = "";
           $item_detail_code  = $row1->item_detail_code;
           $pr_qty   = $row1->qty;
           $rcv_qty    = 0;
           $status   = "Not Complete";   
           $data3 = array('no_rcv_detail'=>$no_rcv_detail, 'no_rcv'=>$no_rcv, 'item_detail_code'=>$item_detail_code, 'pr_qty'=>$pr_qty, 'rcv_qty'=>$rcv_qty, 'status_rcv_item'=>$status);
           $this->m_material_rcv->insertItem($data3);
       }
       
       redirect('Material_Rcv/detail/'.$no_rcv);
    }

    function updateItem(){

       $no_rcv_detail    = $this->input->post('no_rcv_detail');
       $no_rcv = $this->input->post('no_rcv');
       $item_detail_name  = $this->input->post('item_detail_name');
       $pr_qty   = $this->input->post('pr_qty');
       $rcv_qty    = $this->input->post('rcv_qty');

       $data['rcv_item'] = $this->m_material_rcv->get_data_edit_qty_item($no_rcv_detail);
       foreach($data['rcv_item'] as $row){
          $rcv_qty_before = $row->rcv_qty;
        }
       
       if ($pr_qty == $rcv_qty) {
         $status = "Complete";
         } else
          $status = "Not Complete";

       $data1['result'] = $this->m_item_detail->get_data_detail_code($item_detail_name);
       foreach($data1['result'] as $row){
          $item_detail_code = $row->item_detail_code;
        } 
       $data = array('no_rcv_detail'=>$no_rcv_detail, 'no_rcv'=>$no_rcv, 'item_detail_code'=>$item_detail_code, 'pr_qty'=>$pr_qty, 'rcv_qty'=>$rcv_qty, 'status_rcv_item'=>$status);
       $this->m_material_rcv->updateDetail($data,$no_rcv_detail);

       $data['stock'] = $this->m_stock_opname->get_data_edit($item_detail_code);
       foreach($data['stock'] as $row){
          $no_stock = $row->no_stock;
          $item_code = $row->item_code;
          $qty = $row->qty;
          $status_item = $row->status_item;
        }

       if ($rcv_qty_before > $rcv_qty) {
          $rcv_qty_new = $rcv_qty_before - $rcv_qty; 
          $qty = $qty - $rcv_qty_new;        
       } else if ($rcv_qty_before < $rcv_qty) {
          $rcv_qty_new = $rcv_qty - $rcv_qty_before;  
          $qty = $qty + $rcv_qty_new;
       }       

        $data2 = array('no_stock'=>$no_stock, 'item_code'=>$item_code, 'item_detail_code'=>$item_detail_code, 'qty'=>$qty, 'status_item'=>$status_item);
        $this->m_stock_opname->update($data2,$no_stock);


       redirect('Material_Rcv/detail/'.$no_rcv);
    }

    function edit(){
        $no_rcv = $this->uri->segment(3);
        $data['result'] = $this->m_material_rcv->get_data_status($no_rcv);
        foreach($data['result'] as $row){
          if ($row->status == "Complete") {
            redirect('index');
          } else {
            $data['result'] = $this->m_material_rcv->get_data_item($no_rcv);
            $data['row'] = $this->m_material_rcv->get_data_edit($no_rcv);
            $this->template->tampil_spv_receiving('form_edit_material_rcv',$data);
          }
        }

        
    }

    function detail(){
        $no_rcv = $this->uri->segment(3);
        $data['result'] = $this->m_material_rcv->get_data_item($no_rcv);
        $data['row'] = $this->m_material_rcv->get_data_edit($no_rcv);
        $this->template->tampil_spv_receiving('form_detail_material_rcv',$data);
    }
    function update(){
       $no_rcv    = $this->input->post('no_rcv');
       $po_number   = $this->input->post('po_number');
       $do_number    = $this->input->post('do_number');;
       $rcv_date   = $this->input->post('rcv_date');
       $status    = $this->input->post('status'); 
       $data = array('no_rcv'=>$no_rcv, 'po_number'=>$po_number, 'do_number'=>$do_number, 'rcv_date'=>$rcv_date, 'status'=>$status);
       $this->m_material_rcv->update($data,$no_rcv);
       redirect('Material_Rcv/index');
    }
    function delete(){
        $no_rcv = $this->uri->segment(3);
        $data['result'] = $this->m_material_rcv->get_data_status($no_rcv);
        foreach($data['result'] as $row){
          if ($row->status == "Complete") {
            redirect('index');
          } else {
            $this->m_material_rcv->delete($no_rcv);
            redirect('Material_Rcv/index');
          }
        }
    }

}
?>