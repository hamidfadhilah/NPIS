<?php
class Work_Order_Request extends CI_Controller{
    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
          redirect(base_url("login/logout"));
        }
        $this->load->model('m_work_order');
        $this->load->library('Pdf_Library');
    }
    function index(){
        $data['result'] = $this->m_work_order->get_data_dept();

        if($this->session->userdata('level') == "admin"){
          redirect(base_url("index")); 
        }else if($this->session->userdata('level') == "operator"){
            $this->template->tampil_operator_inventory('v_Work_Order_request',$data);
        }else if($this->session->userdata('level') == "supervisor"){
            redirect(base_url("index"));
        }else if($this->session->userdata('level') == "admteknik"){
            redirect(base_url("index"));
        } else  {
          redirect(base_url("login"));
        }
    }
    function tambah(){
        $this->template->tampil_operator_inventory('form_add_Work_Order_request');
    }
    function add(){
       $data['result'] = $this->m_work_order->get_data();
       $i = 1;
       foreach($data['result'] as $row){
          if ($row->no_wo != "W40-ENG-WO-".date("m-Y")."-".$i){
            break;
          } else {
            $i++;
          }
       }
       $no_wo    = "W40-ENG-WO-".date("m-Y")."-".$i;
       $wo_priority   = $this->input->post('wo_priority');
       $wo_trade    = $this->input->post('wo_trade');
       $wo_type   = $this->input->post('wo_type');
       $wo_status    = "Prepare";
       $wo_date    = $this->input->post('wo_date');
       $req_name  = $this->input->post('req_name');
       $req_dept  = $this->input->post('req_dept');
       $machine_name  = $this->input->post('machine_name');
       $wo_desc  = $this->input->post('wo_desc');
       $couse_desc  = $this->input->post('couse_desc');       
       $data = array('no_wo'=>$no_wo, 'wo_priority'=>$wo_priority, 'wo_trade'=>$wo_trade, 'wo_type'=>$wo_type, 'wo_date'=>$wo_date, 'req_name'=>$req_name, 'req_dept'=>$req_dept, 'machine_name'=>$machine_name, 'wo_desc'=>$wo_desc, 'couse_desc'=>$couse_desc,'wo_rcv'=>"",'wo_manager'=>"", 'wo_status'=>$wo_status,'rcv_date'=>"",'start_date'=>"", 'finish_date'=>"", 'action'=>"", 'prevention'=>"");
       $this->m_work_order->insert($data);
       redirect('Work_Order_request/index');
    }
    function edit(){
        $no_wo = $this->uri->segment(3);
        $data['result'] = $this->m_work_order->get_data_wo_status($no_wo);
        foreach($data['result'] as $row){
          if ($row->wo_status == "Delivered" || $row->wo_status == "On Work" || $row->wo_status == "Closed") {
            redirect('index');
          } else {
            $data['row'] = $this->m_work_order->get_data_edit($no_wo);
            $this->template->tampil_operator_inventory('form_edit_Work_Order_request',$data);
          }
        }
        
    }
    function update(){
       $no_wo    = $this->input->post('no_wo');
       $wo_priority   = $this->input->post('wo_priority');
       $wo_trade    = $this->input->post('wo_trade');
       $wo_type   = $this->input->post('wo_type');
       $wo_status    = $this->input->post('wo_status');
       $wo_date    = $this->input->post('wo_date');
       $req_name  = $this->input->post('req_name');
       $req_dept  = $this->input->post('req_dept');
       $machine_name  = $this->input->post('machine_name');
       $wo_desc  = $this->input->post('wo_desc');
       $couse_desc  = $this->input->post('couse_desc');       
       $data = array('no_wo'=>$no_wo, 'wo_priority'=>$wo_priority, 'wo_trade'=>$wo_trade, 'wo_type'=>$wo_type, 'wo_date'=>$wo_date, 'req_name'=>$req_name, 'req_dept'=>$req_dept, 'machine_name'=>$machine_name, 'wo_desc'=>$wo_desc, 'couse_desc'=>$couse_desc,'wo_rcv'=>"",'wo_manager'=>"", 'wo_status'=>$wo_status,'rcv_date'=>"",'start_date'=>"", 'finish_date'=>"", 'action'=>"", 'prevention'=>"",);
       $this->m_work_order->update($data,$no_wo);
       redirect('Work_Order_request/index');
    }
    function delete(){
        $no_wo = $this->uri->segment(3);
        $data['result'] = $this->m_work_order->get_data_wo_status($no_wo);
        foreach($data['result'] as $row){
          if ($row->wo_status == "Delivered" || $row->wo_status == "On Work" || $row->wo_status == "Closed") {
            redirect('index');
          } else {
            $this->m_work_order->delete($no_wo);
            redirect('Work_Order_request/index');
          }
        }
        
    }
    function print(){
      $no_wo = $this->uri->segment(3);
      $data['row'] = $this->m_work_order->get_data_edit($no_wo);
      $this->load->view('print_work_order_request', $data);
    }
}
?>