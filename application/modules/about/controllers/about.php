<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class About extends MX_Controller {
	public function __construct()
	{
        parent:: __construct();		
        $this->load->helper('url');
		$this->load->library('session');
        $this->load->helper('form');
		
	}
	public function index(){
	
		//Title Index
		$data = array(
			'title' => " Kontak ",
			'kategory' => $this->db->get('kategory')
		);		
		
		$this->load->view('header', array('data' => $data));
		$this->load->view('navigation');
		$this->load->view('sidebar_left', $data);
		$this->load->view('about');
		$this->load->view('sidebar_right');
		$this->load->view('footer');
	}
}