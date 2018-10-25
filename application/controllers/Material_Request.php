<?php
class Material_Request extends CI_Controller{

    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
          redirect(base_url("login/logout"));
        }
        $this->load->model('m_material_request');
        $this->load->model('m_item_detail');
        $this->load->library('Pdf_Library');
    }
    function index(){
        $data['result'] = $this->m_material_request->get_data();

        if($this->session->userdata('level') == "admin"){
          redirect(base_url("index")); 
        }else if($this->session->userdata('level') == "operator"){
            $this->template->tampil_operator_inventory('v_material_request',$data);
        }else if($this->session->userdata('level') == "supervisor"){
            redirect(base_url("index"));
        }else if($this->session->userdata('level') == "admteknik"){
            redirect(base_url("index"));
        } else  {
          redirect(base_url("login"));
        }
    }

    function indexDetail(){
        $data['result'] = $this->m_material_request->get_data_item();
        $this->template->tampil_operator_inventory('form_detail_material_request',$data);
    }
    function tambah(){
        //$data['result'] = $this->m_item_master->get_data();
        $this->template->tampil_operator_inventory('form_add_material_request');
    }
    function add(){
       $no_mr    = "";
       $req_name   = $this->session->userdata('name');
       $req_dept    = $this->session->userdata('dept');
       $req_date   = $this->input->post('req_date');
       $mr_status    = "Prepare";
       $remark   = $this->input->post('remark');
       $data = array('no_mr'=>$no_mr, 'req_name'=>$req_name, 'req_dept'=>$req_dept, 'req_date'=>$req_date, 'mr_status'=>$mr_status, 'remark'=>$remark);
       $this->m_material_request->insert($data);

       $data1['result'] = $this->m_material_request->get_data();
       foreach($data1['result'] as $row){
          $no_mr = $row->no_mr;
        } 
       redirect('Material_Request/detail/'.$no_mr);
    }

    function addItem(){
       $no_mr_detail    = "";
       $no_mr = $this->input->post('no_mr');
       $item_detail_name    = $this->input->post('item_detail_name');
       $qty   = $this->input->post('qty');

       $data1['result'] = $this->m_item_detail->get_data_detail_code($item_detail_name);
       foreach($data1['result'] as $row){
          $item_detail_code = $row->item_detail_code;
        }  
       $data = array('no_mr_detail'=>$no_mr_detail, 'no_mr'=>$no_mr, 'item_detail_code'=>$item_detail_code, 'qty'=>$qty);
       $this->m_material_request->insertItem($data);
       redirect('Material_Request/detail/'.$no_mr);
    }

    function updateItem(){
       $no_mr_detail    = $this->input->post('no_mr_detailEdit');
       $no_mr = $this->input->post('no_mrEdit');
       $item_detail_name    = $this->input->post('item_detail_nameEdit');
       $qty   = $this->input->post('qtyEdit');

       $data1['result'] = $this->m_item_detail->get_data_detail_code($item_detail_name);
       foreach($data1['result'] as $row){
          $item_detail_code = $row->item_detail_code;
        }  
       $data = array('no_mr_detail'=>$no_mr_detail, 'no_mr'=>$no_mr, 'item_detail_code'=>$item_detail_code, 'qty'=>$qty);
       $this->m_material_request->updateDetail($data,$no_mr_detail);
       redirect('Material_Request/detail/'.$no_mr);
    }

    function edit(){
        $no_mr = $this->uri->segment(3);
        $data['mr_item'] = $this->m_material_request->get_data_item_edit($no_mr);
        $data['result'] = $this->m_material_request->get_data_status($no_mr);
        foreach($data['result'] as $row){
          if ($row->mr_status == "Complete") {
            redirect('index');
          } else {
            $data['row'] = $this->m_material_request->get_data_edit($no_mr);
            $this->template->tampil_operator_inventory('form_edit_Material_Request',$data);
          }
        }
    }

    function detail(){
        $no_mr = $this->uri->segment(3);
        $data['item_name'] = $this->m_item_detail->get_data();
        $data['result'] = $this->m_material_request->get_data_item($no_mr);
        $data['row'] = $this->m_material_request->get_data_edit($no_mr);
        $this->template->tampil_operator_inventory('form_detail_Material_Request',$data);
    }
    function update(){
       $no_mr    = $this->input->post('no_mr');
       $req_name   = $this->input->post('req_name');
       $req_dept    = $this->input->post('req_dept');
       $req_date   = $this->input->post('req_date');
       $mr_status    = $this->input->post('mr_status');
       $remark   = $this->input->post('remark');
       $data = array('no_mr'=>$no_mr, 'req_name'=>$req_name, 'req_dept'=>$req_dept, 'req_date'=>$req_date, 'mr_status'=>$mr_status, 'remark'=>$remark);
       $this->m_material_request->update($data,$no_mr);
       redirect('Material_Request/index');
    }
    function delete(){
        $no_mr = $this->uri->segment(3);
        $data['result'] = $this->m_material_request->get_data_status($no_mr);
        foreach($data['result'] as $row){
          if ($row->mr_status == "Complete" || $row->mr_status == "Approval") {
            redirect('index');
          } else {
            $this->m_material_request->delete($no_mr);
            redirect('Material_Request/index');
          }
        }
        
    }

    function deleteDetail(){
        $no_mr= $this->uri->segment(3);
        $no_mr_detail = $this->uri->segment(4);
        $data['result'] = $this->m_material_request->get_data_status($no_mr);
        foreach($data['result'] as $row){
          if ($row->mr_status == "Complete" || $row->mr_status == "Approval") {
            redirect('index');
          } else {
             $this->m_material_request->deleteDetail($no_mr_detail);
             redirect('Material_Request/detail/'.$no_mr);
          }
        }
    }
    function print(){
      $no_mr= $this->uri->segment(3);
      $data['result'] = $this->m_material_request->get_data_item($no_mr);
      $data['row'] = $this->m_material_request->get_data_edit($no_mr);
      $this->load->view('print_material_request', $data);
    }
}
?>