<?php
class user extends CI_Controller{
    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
          redirect(base_url("login/logout"));
        }
        $this->load->model('User_model');
    }
    function index(){
    	  $data['result'] = $this->User_model->get_data();
        $this->template->tampil_admin_user('v_user',$data);
    }
    // function tambah(){
    //     $this->template->tampil_admin_user('form_user');
    // }
    function add(){
       $user_id      = "";
       $username    = $this->input->post('username');
       $password    = $this->input->post('password');
       $level       = $this->input->post('level');  
       $name    = $this->input->post('name');
       $dept    = $this->input->post('dept');     
       $data = array('user_id'=>$user_id, 'username'=>$username, 'password'=>$password, 'level'=>$level, 'name'=>$name, 'dept'=>$dept);
       $this->User_model->insert($data);
       redirect('user/index');
    }
    function edit(){
        $user_id = $this->uri->segment(3);
        $data['row'] = $this->User_model->get_data_edit($user_id);
        $this->template->tampil_admin_user('form_edit_user',$data);
    }
    function update(){
       $user_id      = $this->input->post('user_id');
       $username    = $this->input->post('username');
       $password    = $this->input->post('password');
       $level       = $this->input->post('level');
       $name    = $this->input->post('name');
       $dept    = $this->input->post('dept');     
       $data = array('user_id'=>$user_id, 'username'=>$username, 'password'=>$password, 'level'=>$level, 'name'=>$name, 'dept'=>$dept);
       $this->User_model->update($data,$user_id);
       redirect('user/index');
    }
    // function delete(){
    //     $user_id = $this->uri->segment(3);
    //     $this->User_model->delete($user_id);
    //     redirect('user/index');
    // }
    function detail(){
        $user_id = $this->uri->segment(3);
        $data['row'] = $this->User_model->get_data_detail($user_id);
        $this->template->tampil('view_detail_user',$data);
    }
}
?>