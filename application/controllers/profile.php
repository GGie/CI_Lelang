<?php if (!defined('BASEPATH')) exit ('No direct script access allowed') ;   

class Profile extends MX_Controller
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
    }

    public function id($id)
    {
        $data = array('title' => 'Akun Saya', 'data' => $this->db->get_where('users',
                     array('id_user' => $id))) ;
        $this->load->view('header', $data) ;
        $this->load->view('profile', $data) ;
        $this->load->view('footer') ;
    }

}