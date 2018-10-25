<?php
class Work_Order extends CI_Controller{

    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
          redirect(base_url("login/logout"));
        }
        $this->load->model('m_work_order');
        $this->load->model('m_work_order_request');
        $this->load->model('m_item_detail');
        $this->load->model('m_stock_opname');
        $this->load->library('Pdf_Library');
    }
    function index(){
        $data['result'] = $this->m_work_order->get_data_wo();

        if($this->session->userdata('level') == "admin"){
          redirect(base_url("index")); 
        }else if($this->session->userdata('level') == "operator"){
            redirect(base_url("index"));
        }else if($this->session->userdata('level') == "supervisor"){
            $this->template->tampil_spv_inventory('v_work_order',$data);
        }else if($this->session->userdata('level') == "admteknik"){
            $this->template->tampil_admteknik_inventory('v_work_order',$data);
        } else  {
          redirect(base_url("login"));
        }
    }

    function indexDetail(){
        $data['usedPart'] = $this->m_work_order->get_data_item();
        $this->template->tampil_spv_inventory('form_detail_work_order',$data);
    }
    function tambah(){
        $data['result'] = $this->m_work_order->get_data();
        $this->template->tampil_spv_inventory('form_add_work_order', $data);
    }
    function add(){
       $no_wo  = $this->input->post('no_wo');
       $wo_rcv    = $this->input->post('wo_rcv');;
       $wo_manage  = $this->input->post('wo_manage');
       $wo_status    = "Delivered";
       $rcv_date   = $this->input->post('rcv_date');
       $start_date   = $this->input->post('start_date');
       $finish_date  = $this->input->post('finish_date');
       $action  = $this->input->post('action');
       $prevention  = $this->input->post('prevention');
       $wo_priority   = $this->input->post('wo_priority');
       $wo_trade    = $this->input->post('wo_trade');
       $wo_type   = $this->input->post('wo_type');
       $wo_date    = $this->input->post('wo_date');
       $req_name  = $this->input->post('req_name');
       $req_dept  = $this->input->post('req_dept');
       $machine_name  = $this->input->post('machine_name');
       $wo_desc  = $this->input->post('wo_desc');
       $couse_desc  = $this->input->post('couse_desc');       
       $data = array('no_wo'=>$no_wo, 'wo_priority'=>$wo_priority, 'wo_trade'=>$wo_trade, 'wo_type'=>$wo_type, 'wo_date'=>$wo_date, 'req_name'=>$req_name, 'req_dept'=>$req_dept, 'machine_name'=>$machine_name, 'wo_desc'=>$wo_desc, 'couse_desc'=>$couse_desc,'wo_rcv'=>$wo_rcv,'wo_manager'=>$wo_manager, 'wo_status'=>$wo_status,'rcv_date'=>$rcv_date,'start_date'=>$start_date, 'finish_date'=>$finish_date, 'action'=>$action, 'prevention'=>$prevention);

       $this->m_work_order->update($data,$no_wo);
       redirect('work_order/index/');
    }

    function addItem(){
       $no_part    = "";
       $no_wo = $this->input->post('no_wo');
       $item_detail_name    = $this->input->post('item_detail_name');;
       $part_qty   = $this->input->post('part_qty');

       $data1['result'] = $this->m_item_detail->get_data_detail_code($item_detail_name);
       foreach($data1['result'] as $row){
          $item_detail_code = $row->item_detail_code;
        }  
       $data = array('no_part'=>$no_part, 'no_wo'=>$no_wo, 'item_detail_code'=>$item_detail_code, 'part_qty'=>$part_qty);
       $this->m_work_order->insertItem($data);


       $data['stock'] = $this->m_stock_opname->get_data_edit($item_detail_code);
       foreach($data['stock'] as $row){
          $no_stock = $row->no_stock;
          $item_code = $row->item_code;
          $qty = $row->qty;
          $status_item = $row->status_item;
        }
       
       
       $qty = $qty - $part_qty;
      

       $data2 = array('no_stock'=>$no_stock, 'item_code'=>$item_code, 'item_detail_code'=>$item_detail_code, 'qty'=>$qty, 'status_item'=>$status_item);
       $this->m_stock_opname->update($data2,$no_stock);
       redirect('work_order/detail/'.$no_wo);
    }

    function addEmployee(){
       $employee_code    = "";
       $no_wo = $this->input->post('no_wo');
       $employee_name    = $this->input->post('employee_name');
       $data = array('employee_code'=>$employee_code, 'no_wo'=>$no_wo, 'employee_name'=>$employee_name);
       $this->m_work_order->insertEmployee($data);
       redirect('work_order/detail/'.$no_wo);
    }

    function addEquipment(){
       $equipment_code    = "";
       $no_wo = $this->input->post('no_wo');
       $item_detail_name    = $this->input->post('item_detail_name');;
       $equipment_qty   = $this->input->post('equipment_qty');

       $data1['result'] = $this->m_item_detail->get_data_detail_code($item_detail_name);
       foreach($data1['result'] as $row){
          $item_detail_code = $row->item_detail_code;
        }  
       $data = array('equipment_code'=>$equipment_code, 'no_wo'=>$no_wo, 'item_detail_code'=>$item_detail_code, 'equipment_qty'=>$equipment_qty);
       $this->m_work_order->insertEquipment($data);
       redirect('work_order/detail/'.$no_wo);
    }

    function updateItem(){
       $no_part    = $this->input->post('no_part');
       $no_wo = $this->input->post('no_wo');
       $item_detail_name    = $this->input->post('item_detail_name');;
       $part_qty   = $this->input->post('part_qtyEdit');

       $data['WO_item'] = $this->m_work_order->get_data_qty_item($no_part);
       foreach($data['WO_item'] as $row){
          $wo_qty_before = $row->part_qty;
        }

       $data1['result'] = $this->m_item_detail->get_data_detail_code($item_detail_name);
       foreach($data1['result'] as $row){
          $item_detail_code = $row->item_detail_code;
        }  
       $data = array('no_part'=>$no_part, 'no_wo'=>$no_wo, 'item_detail_code'=>$item_detail_code, 'part_qty'=>$part_qty);
       $this->m_work_order->updateDetail($data,$no_part);

       $data['stock'] = $this->m_stock_opname->get_data_edit($item_detail_code);
       foreach($data['stock'] as $row){
          $no_stock = $row->no_stock;
          $item_code = $row->item_code;
          $qty = $row->qty;
          $status_item = $row->status_item;
        }
       
       if ($wo_qty_before > $part_qty) {
          $part_qty_new = $wo_qty_before - $part_qty; 
          $qty = $qty + $part_qty_new;        
       } else if ($wo_qty_before < $part_qty) {
          $part_qty_new = $part_qty - $wo_qty_before;  
          $qty = $qty - $part_qty_new;
       }

       $data2 = array('no_stock'=>$no_stock, 'item_code'=>$item_code, 'item_detail_code'=>$item_detail_code, 'qty'=>$qty, 'status_item'=>$status_item);
       $this->m_stock_opname->update($data2,$no_stock);


       redirect('work_order/detail/'.$no_wo);
    }

    function updateEmployee(){
       $employee_code    = $this->input->post('employee_code');
       $no_wo = $this->input->post('no_wo');
       $employee_name    = $this->input->post('employee_name');
       $data = array('employee_code'=>$employee_code, 'no_wo'=>$no_wo, 'employee_name'=>$employee_name);
       $this->m_work_order->updateEmployee($data,$employee_code);
       redirect('work_order/detail/'.$no_wo);
    }

    function updateEquipment(){
       $equipment_code    = $this->input->post('equipment_code');
       $no_wo = $this->input->post('no_wo');
       $item_detail_name    = $this->input->post('item_detail_name');;
       $equipment_qty   = $this->input->post('equipment_qty');

       $data1['result'] = $this->m_item_detail->get_data_detail_code($item_detail_name);
       foreach($data1['result'] as $row){
          $item_detail_code = $row->item_detail_code;
        }  
       $data = array('equipment_code'=>$equipment_code, 'no_wo'=>$no_wo, 'item_detail_code'=>$item_detail_code, 'equipment_qty'=>$equipment_qty);
       $this->m_work_order->updateEquipment($data,$equipment_code);
       redirect('work_order/detail/'.$no_wo);
    }

    function edit(){
        $no_wo = $this->uri->segment(3);
        $data['result'] = $this->m_work_order->get_data_wo_status($no_wo);
        foreach($data['result'] as $row){
          if ($row->wo_status == "Complete" ) {
            redirect('index');
          } else {
            $data['row'] = $this->m_work_order->get_data_edit($no_wo);
            $this->template->tampil_spv_inventory('form_edit_work_order',$data);
          }
        } 
        
    }

    function detail(){
        $no_wo = $this->uri->segment(3);
        $data['item_name'] = $this->m_item_detail->get_data();
        $data['usedPart'] = $this->m_work_order->get_data_item($no_wo);
        $data['employee'] = $this->m_work_order->get_data_employee($no_wo);
        $data['equipment'] = $this->m_work_order->get_data_equipment($no_wo);
        $data['row'] = $this->m_work_order->get_data_edit($no_wo);
        $this->template->tampil_spv_inventory('form_detail_work_order',$data);
    }
    function update(){
       $no_wo    = $this->input->post('no_wo');
       $no_wor   = $this->input->post('no_wor');
       $ack_name    = $this->input->post('ack_name');;
       $app_name   = $this->input->post('app_name');
       $wo_status    = $this->input->post('wo_status');
       $start_date   = $this->input->post('start_date');
       $finish_date  = $this->input->post('finish_date');
       $action  = $this->input->post('action');
       $prevention  = $this->input->post('prevention');
       $data = array('no_wo'=>$no_wo, 'no_wor'=>$no_wor, 'ack_name'=>$ack_name, 'app_name'=>$app_name, 'wo_status'=>$wo_status, 'start_date'=>$start_date, 'finish_date'=>$finish_date , 'action'=>$action, 'prevention'=>$prevention);
       $this->m_work_order->update($data,$no_wo);
       redirect('work_order/index');
    }
    function delete(){
        $no_wo = $this->uri->segment(3);
        $data['result'] = $this->m_work_order->get_data_wo_status($no_wo);
        foreach($data['result'] as $row){
          if ($row->wo_status == "Complete" || $row->wo_status == "On Work" ) {
            redirect('index');
          } else {
            $this->m_work_order->delete($no_wo);
            redirect('work_order/index');
          }
        }   
        
    }

    function deleteDetail(){
        $no_wo= $this->uri->segment(3);
        $no_part = $this->uri->segment(4);
        $data['result'] = $this->m_work_order->get_data_wo_status($no_wo);
        foreach($data['result'] as $row){
          if ($row->wo_status == "Complete" ) {
            redirect('index');
          } else {
            $this->m_work_order->deleteDetail($no_part);
            redirect('work_order/detail/'.$no_wo);
          }
        } 
        
    }

    function deleteEmployee(){
        $no_wo= $this->uri->segment(3);
        $employee_code = $this->uri->segment(4);
        $data['result'] = $this->m_work_order->get_data_wo_status($no_wo);
        foreach($data['result'] as $row){
          if ($row->wo_status == "Complete" ) {
            redirect('index');
          } else {
            $this->m_work_order->deleteEmployee($employee_code);
            redirect('work_order/detail/'.$no_wo);
          }
        } 
        
    }

    function deleteEquipment(){
        $no_wo= $this->uri->segment(3);
        $equipment_code = $this->uri->segment(4);
        $data['result'] = $this->m_work_order->get_data_wo_status($no_wo);
        foreach($data['result'] as $row){
          if ($row->wo_status == "Complete" ) {
            redirect('index');
          } else {
            $this->m_work_order->deleteEquipment($equipment_code);
            redirect('work_order/detail/'.$no_wo);
          }
        } 
        
    }
    function print(){
       $no_wo = $this->uri->segment(3);
       $data['item_name'] = $this->m_item_detail->get_data();
       $data['usedPart'] = $this->m_work_order->get_data_item($no_wo);
       $data['employee'] = $this->m_work_order->get_data_employee($no_wo);
       $data['equipment'] = $this->m_work_order->get_data_equipment($no_wo);

       $data['result'] = $this->m_work_order->get_data_wo_status($no_wo);
       foreach($data['result'] as $row1){
          $no_wor = $row1->no_wor;
        }

       $data['wor'] = $this->m_work_order_request->get_data_edit($no_wor);
       $data['wo'] = $this->m_work_order->get_data_edit($no_wo);
       $this->load->view('print_work_order', $data);
    }
}
?>