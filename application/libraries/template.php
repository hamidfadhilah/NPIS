<?php 
/**
* 
*/
class template{
	protected $_ci;	

	function __construct()	{
		$this->_ci = &get_instance();
	}
	function tampil_admin($content, $data=NULL){
		$data['sidebar'] 	= $this->_ci->load->view('sidebar_admin', $data, TRUE);
		$data['menu'] 		= $this->_ci->load->view('menu', $data, TRUE);		
		$data['content'] 	= $this->_ci->load->view($content, $data, TRUE);
		$data['footer'] 	= $this->_ci->load->view('footer', $data, TRUE);

		$this->_ci->load->view('layout',$data);
	}

	function tampil_admin_user($content, $data=NULL){
		$data['sidebar'] 	= $this->_ci->load->view('sidebar_admin_user', $data, TRUE);
		$data['menu'] 		= $this->_ci->load->view('menu_user', $data, TRUE);		
		$data['content'] 	= $this->_ci->load->view($content, $data, TRUE);
		$data['footer'] 	= $this->_ci->load->view('footer', $data, TRUE);

		$this->_ci->load->view('layout',$data);
	}

	function tampil_operator($content, $data=NULL){
		$data['sidebar'] 	= $this->_ci->load->view('sidebar_operator', $data, TRUE);
		$data['menu'] 		= $this->_ci->load->view('menu', $data, TRUE);		
		$data['content'] 	= $this->_ci->load->view($content, $data, TRUE);
		$data['footer'] 	= $this->_ci->load->view('footer', $data, TRUE);

		$this->_ci->load->view('layout',$data);
	}

	function tampil_operator_inventory($content, $data=NULL){
		$data['sidebar'] 	= $this->_ci->load->view('sidebar_operator_inventory', $data, TRUE);
		$data['menu'] 		= $this->_ci->load->view('menu_inventory_operator', $data, TRUE);		
		$data['content'] 	= $this->_ci->load->view($content, $data, TRUE);
		$data['footer'] 	= $this->_ci->load->view('footer', $data, TRUE);

		$this->_ci->load->view('layout',$data);
	}

	function tampil_spv($content, $data=NULL){
		$data['sidebar'] 	= $this->_ci->load->view('sidebar_spv', $data, TRUE);
		$data['menu'] 		= $this->_ci->load->view('menu', $data, TRUE);		
		$data['content'] 	= $this->_ci->load->view($content, $data, TRUE);
		$data['footer'] 	= $this->_ci->load->view('footer', $data, TRUE);

		$this->_ci->load->view('layout',$data);
	}

	function tampil_spv_master($content, $data=NULL){
		$data['sidebar'] 	= $this->_ci->load->view('sidebar_spv_master', $data, TRUE);
		$data['menu'] 		= $this->_ci->load->view('menu_master', $data, TRUE);		
		$data['content'] 	= $this->_ci->load->view($content, $data, TRUE);
		$data['footer'] 	= $this->_ci->load->view('footer', $data, TRUE);

		$this->_ci->load->view('layout',$data);
	}

	function tampil_spv_purchasing($content, $data=NULL){
		$data['sidebar'] 	= $this->_ci->load->view('sidebar_spv_purchasing', $data, TRUE);
		$data['menu'] 		= $this->_ci->load->view('menu_purchasing', $data, TRUE);		
		$data['content'] 	= $this->_ci->load->view($content, $data, TRUE);
		$data['footer'] 	= $this->_ci->load->view('footer', $data, TRUE);

		$this->_ci->load->view('layout',$data);
	}

	function tampil_spv_receiving($content, $data=NULL){
		$data['sidebar'] 	= $this->_ci->load->view('sidebar_spv_receiving', $data, TRUE);
		$data['menu'] 		= $this->_ci->load->view('menu_receiving', $data, TRUE);		
		$data['content'] 	= $this->_ci->load->view($content, $data, TRUE);
		$data['footer'] 	= $this->_ci->load->view('footer', $data, TRUE);

		$this->_ci->load->view('layout',$data);
	}

	function tampil_spv_inventory($content, $data=NULL){
		$data['sidebar'] 	= $this->_ci->load->view('sidebar_spv_inventory', $data, TRUE);
		$data['menu'] 		= $this->_ci->load->view('menu_inventory', $data, TRUE);		
		$data['content'] 	= $this->_ci->load->view($content, $data, TRUE);
		$data['footer'] 	= $this->_ci->load->view('footer', $data, TRUE);

		$this->_ci->load->view('layout',$data);
	}

	function tampil_admteknik($content, $data=NULL){
		$data['sidebar'] 	= $this->_ci->load->view('sidebar_admteknik', $data, TRUE);
		$data['menu'] 		= $this->_ci->load->view('menu', $data, TRUE);		
		$data['content'] 	= $this->_ci->load->view($content, $data, TRUE);
		$data['footer'] 	= $this->_ci->load->view('footer', $data, TRUE);

		$this->_ci->load->view('layout',$data);
	}

	function tampil_admteknik_purchasing($content, $data=NULL){
		$data['sidebar'] 	= $this->_ci->load->view('sidebar_admteknik_purchasing', $data, TRUE);
		$data['menu'] 		= $this->_ci->load->view('menu_purchasing', $data, TRUE);		
		$data['content'] 	= $this->_ci->load->view($content, $data, TRUE);
		$data['footer'] 	= $this->_ci->load->view('footer', $data, TRUE);

		$this->_ci->load->view('layout',$data);
	}

	function tampil_admteknik_receiving($content, $data=NULL){
		$data['sidebar'] 	= $this->_ci->load->view('sidebar_admteknik_receiving', $data, TRUE);
		$data['menu'] 		= $this->_ci->load->view('menu_receiving', $data, TRUE);		
		$data['content'] 	= $this->_ci->load->view($content, $data, TRUE);
		$data['footer'] 	= $this->_ci->load->view('footer', $data, TRUE);

		$this->_ci->load->view('layout',$data);
	}

	function tampil_admteknik_inventory($content, $data=NULL){
		$data['sidebar'] 	= $this->_ci->load->view('sidebar_admteknik_inventory', $data, TRUE);
		$data['menu'] 		= $this->_ci->load->view('menu_inventory', $data, TRUE);		
		$data['content'] 	= $this->_ci->load->view($content, $data, TRUE);
		$data['footer'] 	= $this->_ci->load->view('footer', $data, TRUE);

		$this->_ci->load->view('layout',$data);
	}
}

?>
