<?php
class Users extends CI_Controller{  

    function __construct() {
        parent::__construct();
        
        $this->load->model('User_model');
    }

    function login(){
        $username = $_POST['username'];
        $pass  = md5($_POST['password']);
        $chek = $this->db->get_where('tb_user',array('username'=>$username,'password'=>$pass  ));
        
        if($chek->num_rows()>0){
                $sess = array('status'=>'login','username'=>$username);
                $this->session->set_userdata($sess);
                $data['result'] = $this->User_model->get_data_user($username);
                   foreach($data['result'] as $row){
                      $level = $row->level;
                      $dept = $row->dept;
                      $name = $row->name;
                    }

                $this->session->set_flashdata('username', $username);
                $this->session->set_flashdata('level', $level);
                $this->session->set_flashdata('dept', $dept);
                $this->session->set_flashdata('name', $name);
                if ($level == 'admin') {
                    redirect('home');
                }else{
                    $this->load->view('login');
                    //$this->template_login->tampil('form_transaksi');
                }
                
                //$this->template->tampil('content');
        }else{
                //echo "<script type=\"text/javascript\">alert(\"User tidak terdaftar\");</script>";
                $this->load->view('login');
            
        }

    }
    
    function logout(){
        $this->session->sess_destroy();
        $this->load->view('login');
        //redirect('login');
    }
}