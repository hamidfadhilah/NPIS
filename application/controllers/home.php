<?php
class home extends CI_Controller{
    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
			redirect(base_url("login/logout"));
		}
        
    }
    function index(){
    	
    	if($this->session->userdata('level') == "admin"){
        	$this->template->tampil_admin('content');
        	$level = $this->session->userdata('level');
        }else if($this->session->userdata('level') == "operator"){
            $this->template->tampil_operator('content');
        }else if($this->session->userdata('level') == "supervisor"){
            $this->template->tampil_spv('content');
        }else if($this->session->userdata('level') == "admteknik"){
            $this->template->tampil_admteknik('content');
        } else  {
        	redirect(base_url("login"));	
        }
	}
    
}
?>