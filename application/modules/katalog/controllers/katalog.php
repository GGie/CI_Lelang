<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Katalog extends MX_Controller {
	public function __construct()
	{
        parent:: __construct();		
        $this->load->helper('url');
        $this->load->helper('form');
		
	}
	public function index(){
	
		//Title Index
		$data = array(
			'title' => " Online Shop ",
			'data' => $this->db->get('katalog'),
			'kategory' => $this->db->get('kategory')
		);		
		
		$this->load->view('header', array('data' => $data));
		$this->load->view('navigation');
		$this->load->view('sidebar_left', $data);
		$this->load->view('katalog', $data);
		$this->load->view('sidebar_right');
		$this->load->view('footer');
	}
	
	public function detail($id){
	
		//Title Index
		$data = array(
			'title' => " Online Shop ",
			'data' => $this->db->get_where('katalog', array('id' => $id)),
			'comment' => $this->db->get_where('comment', array('id_comment' => $id)),
			'kategory' => $this->db->get('kategory')
		);		
		
		$this->load->view('header', array('data' => $data));
		$this->load->view('navigation');
		$this->load->view('sidebar_left', $data);
		$this->load->view('detail', $data);
		$this->load->view('sidebar_right');
		$this->load->view('footer');	
	}
}