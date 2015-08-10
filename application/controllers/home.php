<?php if (!defined('BASEPATH')) exit ('No direct script access allowed') ;

class Home extends MX_Controller
{

    public function __construct()
    {
        parent :: __construct() ;
        $this->load->helper('url') ;
        $this->load->library('session') ;
        $this->load->helper('form') ;
    }

    public function index()
    {
        
		$data = array(
					'title' => 'Online Shop',
					'data' => $this->db->order_by('id_product', 'RANDOM')->get_where('product', array('active' => 1)),
					'nav' => $this->db->get('kategori')
					);
        $this->load->view('header', $data) ;
        $this->load->view('navigation', $data) ;
        $this->load->view('home', $data) ;
        $this->load->view('footer') ;
    }

    public function login()
    {
        $data['title'] = " Online Shop " ;
        $this->load->view('header', $data) ;
        $this->load->view('navigation') ;
        $this->load->view('login') ;
        $this->load->view('footer') ;
    }

}