<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Kategory extends MX_Controller {
	public function __construct()
	{
        parent:: __construct();		
        $this->load->helper('url');
		$this->load->library('session');
        $this->load->helper('form');
		
	}
	public function index($kategory){
	
		//Title Index
		$data = array(
			'title' => " Kontak ",
			'data' => $this->db->get_where('katalog', array('product_category' => $kategory)),
			'kategory' => $this->db->get('kategory')
		);		
		
		$this->load->view('header', array('data' => $data));
		$this->load->view('navigation');
		$this->load->view('sidebar_left', $data);
		$this->load->view('kategory', $data);
		$this->load->view('sidebar_right');
		$this->load->view('footer');
	}
}