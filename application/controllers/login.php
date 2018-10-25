<?php
class login extends CI_Controller{  

    function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('m_stock_opname');
    }

    public function index()
    {
        $this->load->view('login'); 
    }

    function login(){
        $username = $_POST['username'];
        $pass  = $_POST['password'];
        $chek = $this->db->get_where('tb_user',array('username'=>$username,'password'=>$pass  ));
        
        if($chek->num_rows()>0){
                $data['result'] = $this->User_model->get_data_user($username);
                   foreach($data['result'] as $row){
                      $level = $row->level;
                      $dept = $row->dept;
                      $name = $row->name;
                    }
                $sess = array('status'=>'login','username'=>$username,'level'=>$level, 'dept'=>$dept,'name'=>$name);
                $this->session->set_userdata($sess);

                //$this->session->set_flashdata('level', $level);
                if ($level == 'admin' || $level == 'operator' || $level == 'supervisor' || $level == 'admteknik' ) {
                    redirect('home');
                } else{
                    redirect(base_url());
                    
                    //$this->template_login->tampil('form_transaksi');
                }
                
                //$this->template->tampil('content');
        }else{
                //echo "<script type=\"text/javascript\">alert(\"User tidak terdaftar\");</script>";
               redirect(base_url());
            
            
        }

    }
    
    function logout(){
        $data = $this->m_stock_opname->get_data();
        if($this->m_stock_opname->getLastDate()->date == date('Y-m-d') ){
            $this->m_stock_opname->deleteStock();
            foreach ($data as $d) {
                
                $ds['item_code']        = $d->item_code;
                $ds['item_detail_code'] = $d->item_detail_code;
                $ds['date']             = date('Y-m-d');
                $ds['qty']              = $d->qty;

                $this->m_stock_opname->insertStock($ds);
            }
        }else{
            foreach ($data as $d) {
                
                $ds['item_code']        = $d->item_code;
                $ds['item_detail_code'] = $d->item_detail_code;
                $ds['date']             = date('Y-m-d');
                $ds['qty']              = $d->qty;

                $this->m_stock_opname->insertStock($ds);
            }
        }

        $this->session->sess_destroy();
        $this->load->view('login');
        redirect('login');
    }

    function coba(){
        echo $this->m_stock_opname->getLastDate()->date;
        $data = $this->m_stock_opname->get_data();
        if($this->m_stock_opname->getLastDate()->date == date('Y-m-d') ){
            $this->m_stock_opname->deleteStock();
            foreach ($data as $d) {
                
                $ds['item_code']        = $d->item_code;
                $ds['item_detail_code'] = $d->item_detail_code;
                $ds['date']             = date('Y-m-d');
                $ds['qty']              = $d->qty;

                $this->m_stock_opname->insertStock($ds);
            }
        }else{
            echo $this->m_stock_opname->getLastDate()->date;
            foreach ($data as $d) {
                
                $ds['item_code']        = $d->item_code;
                $ds['item_detail_code'] = $d->item_detail_code;
                $ds['date']             = date('Y-m-d');
                $ds['qty']              = $d->qty;

                $this->m_stock_opname->insertStock($ds);
            }
        }
    }
}