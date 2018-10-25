<?php
class new_material_request extends CI_Controller{

    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
          redirect(base_url("login/logout"));
        }
        $this->load->model('m_new_material_request');
    }
    function index(){
        $data['result'] = $this->m_new_material_request->get_data();

        if($this->session->userdata('level') == "admin"){
          redirect(base_url("index")); 
        }else if($this->session->userdata('level') == "operator"){
            $this->template->tampil_operator_inventory('v_new_material_request',$data);
        }else if($this->session->userdata('level') == "supervisor"){
            redirect(base_url("index"));
        }else if($this->session->userdata('level') == "admteknik"){
            $this->template->tampil_admteknik_inventory('v_new_material_request',$data);
        } else  {
          redirect(base_url("login"));
        }
    }
    function tambah(){
        //$data['result'] = $this->m_item_master->get_data();
        $this->template->tampil_operator_inventory('form_add_new_material_request');
    }
    function add(){
       $data['result'] = $this->m_new_material_request->get_data();
       $i = 1;
       foreach($data['result'] as $row){
          if ($row->no_new_mr != "W40-".$this->session->userdata('dept')."-NMR-".$i){
            break;
          } else {
            $i++;
          }
       }
       $no_new_mr    = "W40-".$this->session->userdata('dept')."-NMR-".$i;
       $req_name   = $this->session->userdata('name');
       $req_dept    = $this->session->userdata('dept');
       $req_date   = $this->input->post('req_date');
       $item_name   = $this->input->post('item_name');
       $new_mr_status    = "Prepare";
       $remark   = $this->input->post('remark');
       $data = array('no_new_mr'=>$no_new_mr, 'req_name'=>$req_name, 'req_dept'=>$req_dept, 'req_date'=>$req_date, 'new_mr_status'=>$new_mr_status, 'item_name'=>$item_name, 'remark'=>$remark);
       $this->m_new_material_request->insert($data);

       redirect('new_material_request/index');
    }

    
    function edit(){
        $no_new_mr = $this->uri->segment(3);
        $data['result'] = $this->m_new_material_request->get_data_status($no_new_mr);
        foreach($data['result'] as $row){
          if ($row->new_mr_status == "Rejected" || $row->new_mr_status == "Approved") {
            redirect('index');
          } else {
            $data['row'] = $this->m_new_material_request->get_data_edit($no_new_mr);
            $this->template->tampil_operator_inventory('form_edit_new_material_request',$data);
          }
        }
    }

    function update(){
       $no_new_mr    = $this->input->post('no_new_mr');
       $req_name   = $this->session->userdata('name');
       $req_dept    = $this->session->userdata('dept');
       $req_date   = $this->input->post('req_date');
       $item_name   = $this->input->post('item_name');
       $new_mr_status    = "Prepare";
       $remark   = $this->input->post('remark');
       $data = array('no_new_mr'=>$no_new_mr, 'req_name'=>$req_name, 'req_dept'=>$req_dept, 'req_date'=>$req_date, 'new_mr_status'=>$new_mr_status, 'item_name'=>$item_name, 'remark'=>$remark);
       $this->m_new_material_request->update($data,$no_new_mr);
       redirect('new_material_request/index');
    }
    function delete(){
        $no_new_mr = $this->uri->segment(3);
        $data['result'] = $this->m_new_material_request->get_data_status($no_new_mr);
        foreach($data['result'] as $row){
          if ($row->new_mr_status == "Rejected" || $row->new_mr_status == "Approved") {
            redirect('index');
          } else {
            $this->m_new_material_request->delete($no_new_mr);
            redirect('new_material_request/index');
          }
        }
        
    }
}
?>