<?php
class PR_Opex extends CI_Controller{

    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
          redirect(base_url("login/logout"));
        }
        $this->load->model('m_pr_opex');
        $this->load->model('m_item_detail');
        $this->load->library('Pdf_Library');
    }
    function index(){
        $data['result'] = $this->m_pr_opex->get_data();
        if($this->session->userdata('level') == "admin"){
          redirect(base_url("index")); 
        }else if($this->session->userdata('level') == "operator"){
            redirect(base_url("index"));
        }else if($this->session->userdata('level') == "supervisor"){
            $this->template->tampil_spv_purchasing('v_pr_opex',$data);
        }else if($this->session->userdata('level') == "admteknik"){
            $this->template->tampil_admteknik_purchasing('v_pr_opex',$data);
        } else  {
          redirect(base_url("login"));  
        }
        
    }

    function indexDetail(){
        $data['result'] = $this->m_pr_opex->get_data_item();
        $this->template->tampil_spv_purchasing('form_detail_pr_opex',$data);
    }
    function tambah(){
        //$data['result'] = $this->m_item_master->get_data();
        $this->template->tampil_spv_purchasing('form_add_pr_opex');
    }
    function add(){
       $jmlPR = 1;
       $bool = "false";
       $pr_number    = "";
       $pr_date   = $this->input->post('pr_date');
       $pr_status    = $this->input->post('pr_status');;
       $req_name   = $this->input->post('req_name');
       $req_dept    = $this->input->post('req_dept');
       $pr_priority   = $this->input->post('pr_priority');
       $ack_status  = $this->input->post('ack_status');
       $ack_name  = $this->input->post('ack_name');
       $ack_date  = $this->input->post('ack_date');
       $app_status  = $this->input->post('app_status');
       $app_name  = $this->input->post('app_name'); 
       $app_date  = $this->input->post('app_date'); 
       $data1['result'] = $this->m_pr_opex->get_data();

       foreach($data1['result'] as $row){
          $po_number  = "pr-".$jmlPR;
          foreach($data1['result'] as $row1){
            if ($po_number == $row1->po_number) {
              $bool = "false";
              break;
            } else
              $bool = "true";
          }
          if ($bool == "true") {
            break;
          } else
            $jmlPR++;
        }
            
       $data = array('pr_number'=>$pr_number, 'pr_date'=>$pr_date, 'pr_status'=>$pr_status, 'req_name'=>$req_name, 'req_dept'=>$req_dept, 'pr_priority'=>$pr_priority, 'ack_status'=>$ack_status , 'ack_name'=>$ack_name, 'ack_date'=>$ack_date, 'app_status'=>$app_status, 'app_name'=>$app_name, 'app_date'=>$app_date, 'po_number'=>$po_number);
       $this->m_pr_opex->insert($data);

       $data1['result'] = $this->m_pr_opex->get_data();
       foreach($data1['result'] as $row){
          $pr_number = $row->pr_number;
        }  
       redirect('PR_Opex/detail/'.$pr_number);
    }

    function addItem(){
       $pr_detail_code    = "";
       $pr_number = $this->input->post('pr_num');
       $item_detail_name    = $this->input->post('item_detail_name');;
       $qty   = $this->input->post('qty');

       $data1['result'] = $this->m_item_detail->get_data_detail_code($item_detail_name);
       foreach($data1['result'] as $row){
          $item_detail_code = $row->item_detail_code;
        }  
       $data = array('pr_detail_code'=>$pr_detail_code, 'pr_number'=>$pr_number, 'item_detail_code'=>$item_detail_code, 'qty'=>$qty);
       $this->m_pr_opex->insertItem($data);
       redirect('PR_Opex/detail/'.$pr_number);
    }

    function updateItem(){
       $pr_detail_code    = $this->input->post('pr_detail_codeEdit');
       $pr_number = $this->input->post('pr_numEdit');
       $item_detail_name    = $this->input->post('item_detail_nameEdit');;
       $qty   = $this->input->post('qtyEdit');

       $data1['result'] = $this->m_item_detail->get_data_detail_code($item_detail_name);
       foreach($data1['result'] as $row){
          $item_detail_code = $row->item_detail_code;
        }   
       $data = array('pr_detail_code'=>$pr_detail_code, 'pr_number'=>$pr_number, 'item_detail_code'=>$item_detail_code, 'qty'=>$qty);
       $this->m_pr_opex->updateDetail($data,$pr_detail_code);
       redirect('PR_Opex/detail/'.$pr_number);
    }

    function edit(){
        $pr_number = $this->uri->segment(3);
        $data['result'] = $this->m_pr_opex->get_data_pr_status($pr_number);
        $data['pr_item'] = $this->m_pr_opex->get_data_item_edit($pr_number);
        foreach($data['result'] as $row){
          if ($row->pr_status == "Complete") {
            redirect('index');
          } else {
            $data['row'] = $this->m_pr_opex->get_data_edit($pr_number);
            $this->template->tampil_spv_purchasing('form_edit_pr_opex',$data);
          }
        }  
        
    }

    function detail(){
        $pr_number = $this->uri->segment(3);
        $data['item_name'] = $this->m_item_detail->get_data();
        $data['result'] = $this->m_pr_opex->get_data_item($pr_number);
        $data['row'] = $this->m_pr_opex->get_data_edit($pr_number);
        $this->template->tampil_spv_purchasing('form_detail_pr_opex',$data);
    }
    function update(){
       $pr_number   = $this->input->post('pr_number');
       $pr_date   = $this->input->post('pr_date');
       $pr_status    = $this->input->post('pr_status');;
       $req_name   = $this->input->post('req_name');
       $req_dept    = $this->input->post('req_dept');
       $pr_priority   = $this->input->post('pr_priority');
       $ack_status  = $this->input->post('ack_status');
       $ack_name  = $this->input->post('ack_name');
       $ack_date  = $this->input->post('ack_date');
       $app_status  = $this->input->post('app_status');
       $app_name  = $this->input->post('app_name'); 
       $app_date  = $this->input->post('app_date');     
       $po_number  = $this->input->post('po_number'); 
       $data = array('pr_number'=>$pr_number, 'pr_date'=>$pr_date, 'pr_status'=>$pr_status, 'req_name'=>$req_name, 'req_dept'=>$req_dept, 'pr_priority'=>$pr_priority, 'ack_status'=>$ack_status , 'ack_name'=>$ack_name, 'ack_date'=>$ack_date, 'app_status'=>$app_status, 'app_name'=>$app_name, 'app_date'=>$app_date, 'po_number'=>$po_number);
       $this->m_pr_opex->update($data,$pr_number);
       redirect('PR_Opex/index');
    }
    function delete(){
        $pr_number = $this->uri->segment(3);
        $data['result'] = $this->m_pr_opex->get_data_pr_status($pr_number);
        foreach($data['result'] as $row){
          if ($row->pr_status == "Complete") {
            redirect('index');
          } else {
            $this->m_pr_opex->delete($pr_number);
            redirect('PR_Opex/index');
          }
        }        
    }

    function deleteDetail(){
        $pr_number= $this->uri->segment(3);
        $pr_detail_code = $this->uri->segment(4);
        $data['result'] = $this->m_pr_opex->get_data_pr_status($pr_number);
        foreach($data['result'] as $row){
          if ($row->pr_status == "Complete") {
            redirect('index');
          } else {
            $this->m_pr_opex->deleteDetail($pr_detail_code);
            redirect('PR_Opex/detail/'.$pr_number);
          }
        }      
        
    }
    function print(){
      $pr_number = $this->uri->segment(3);
      $data['result'] = $this->m_pr_opex->get_data_item($pr_number);
      $data['row'] = $this->m_pr_opex->get_data_edit($pr_number);
      $this->load->view('print_pr_opex', $data);
    }
}
?>