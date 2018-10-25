<?php
class Stock_Opname extends CI_Controller{
    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
          redirect(base_url("login/logout"));
        }
        $this->load->library('Pdf_Library');
        $this->load->model('m_stock_opname');
    }
    function index(){
        $data['result'] = $this->m_stock_opname->get_data();

        if($this->session->userdata('level') == "admin"){
          redirect(base_url("index")); 
        }else if($this->session->userdata('level') == "operator"){
            redirect(base_url("index"));
        }else if($this->session->userdata('level') == "supervisor"){
            $this->template->tampil_spv_inventory('v_stock_opname',$data);
        }else if($this->session->userdata('level') == "admteknik"){
            $this->template->tampil_admteknik_inventory('v_stock_opname',$data);
        } else  {
          redirect(base_url("login"));
        }  
    }  
    function print(){
        $data['result'] = $this->m_stock_opname->get_data();
        $this->load->view('print_stock_opname', $data);
    }
}
?>