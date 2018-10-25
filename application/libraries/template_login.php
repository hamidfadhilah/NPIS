<?php 
/**
* 
*/
class template_login{
	protected $_ci;	

	function __construct()	{
		$this->_ci = &get_instance();
	}
	function tampil($content, $data=NULL){
		//$data['sidebar'] 	= $this->_ci->load->view('sidebar', $data, TRUE);
		$data['menu'] 		= $this->_ci->load->view('menu', $data, TRUE);		
		$data['content'] 	= $this->_ci->load->view($content, $data, TRUE);
		$data['footer'] 	= $this->_ci->load->view('footer', $data, TRUE);

		$this->_ci->load->view('layout',$data);
	}
}

?>
