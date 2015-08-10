<?php if (!defined('BASEPATH')) exit ('No direct script access allowed') ;   

class Product extends MX_Controller
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
        $data['title'] = " Online Shop " ;
        $this->load->view('header', $data) ;
        $this->load->view('post_product') ;
        $this->load->view('footer') ;
    }

    public function id($kategori)
    {
		$data = array(
					'title' => 'Kategori ' . $kategori,
					'data' => $this->db->get_where('product', array('kategori' => $kategori))
					);
        $this->load->view('header', $data) ;
        $this->load->view('product', $data) ;
        $this->load->view('footer') ;
    }
	
    public function detail($id)
    {
	
		$data = array(
					'title' => 'Detail Product',
					'detail' => $this->db->get_where('product', array('id_product' => $id))
					);
        $this->load->view('header', $data) ;
		$this->load->view('detail', $data) ;
		$this->load->view('footer') ;
	}

}