<?php if (!defined('BASEPATH')) exit ('No direct script access allowed') ;

class Masuk extends CI_Controller
{

    function __construct()
    {
        parent :: __construct() ;
        $this->load->library('session') ;
        $this->load->helper('form') ;
        $this->load->helper('url') ;
    }

    function test()
    {
        $this->db->select('*') ;
        $this->db->from('users') ;
        $this->db->where('username', 'admin') ;
        $this->db->where('password', 'admin') ;
        $result = $this->db->limit(1)->get() ;
        foreach ($result->result() as $row)
        {
            echo $row->id ;
        }
    }

    function index()
    {
        redirect('masuk/login', 'refresh') ;
    }

    function login()
    {
        $data['title'] = " Login Users " ;
        $this->load->view('header', $data) ;
        $this->load->view('login') ;
        $this->load->view('footer') ;
        if ($this->input->post('login'))
        {
            $email = $this->input->post('email') ;
            $password = $this->input->post('password') ;
            $this->db->select('*') ;
            $this->db->from('users') ;
            $this->db->where('email', $email) ;
            $this->db->where('password', $password) ;
            $this->db->where('active', 1) ;
            $result = $this->db->limit(1)->get() ;
            $sess_array = array() ;
            if ($result->num_rows() == 1)
            {
                foreach ($result->result() as $row)
                {
                    $sess_array = array('id_user' => $row->id_user, 
										'username' => $row->email,
										'password' => $row->password, 
										'level' => $row->level, 
										'login_status' => true,) ;
                    $this->session->set_userdata($sess_array) ;
                    redirect('profile/id/' . $row->id_user, 'refresh') ;
                }
            }
            else
            {
                echo "<script>alert('Username atau Password salah!!')</script>" ;
                redirect('masuk/login', 'refresh') ;
            }
        }
    }

    function logout()
    {
        $this->session->unset_userdata('username') ;
        $this->session->unset_userdata('level') ;
        session_destroy() ;
        redirect('masuk/login') ;
    }

    public function daftar()
    {
        $this->load->library('session') ;
        $this->load->helper(array('captcha', 'url')) ;
        if ($this->input->post() && ($this->input->post('secutity_code') == $this->session->
           userdata('mycaptcha')))
        {
            $database = array('username' => $this->input->post('username'), 'email' => $this->
                             input->post('email'), 'password' => $this->input->post(
                             'password'), 'company' => $this->input->post('company')) ;
							 
		// Untuk verifikasi via email
            $encrypted_id = md5($id) ;
            $this->load->library('email') ;
            $config = array() ;
            $config['charset'] = 'utf-8' ;
            $config['useragent'] = 'Codeigniter' ;
            $config['protocol'] = "smtp" ;
            $config['mailtype'] = "html" ;
            $config['smtp_host'] = "ssl://smtp.gmail.com" ;
            $config['smtp_port'] = "465" ;
            $config['smtp_timeout'] = "400" ;
            $config['smtp_user'] = "anggietriejast@gmail.com" ;
            $config['smtp_pass'] = "uciha" ;
            $config['crlf'] = "\r\n" ;
            $config['newline'] = "\r\n" ;
            $config['wordwrap'] = TRUE ;
            $this->email->initialize($config) ;
            $this->email->from($config['smtp_user']) ;
            $this->email->to($email) ;
            $this->email->subject("Verifikasi Akun") ;
            $this->email->message(
                                 "terimakasih telah melakuan registrasi, untuk memverifikasi silahkan klik tautan dibawah ini<br><br>"
                                 . site_url("register/verification/$encrypted_id")) ;
		// end
		
            $this->db->insert('users', $database) ;
            echo "<script>alert('Registrasi Berhasil, Silahkan Login!!')</script>" ;
            redirect('masuk/login', 'refresh') ;
        }
        else
        {
            $this->load->helper('captcha') ;
            $vals = array('img_path' => './captcha/', 'img_url' => base_url() . 'captcha/',
                         'img_width' => '200', 'img_height' => 30, 'border' => 1,
                         'word_length' => 4, 'pool' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
                         'expiration' => 7200
						 ) ;
            $cap = create_captcha($vals) ;
            $data['image'] = $cap['image'];
            if ($this->input->post())
            {
                $this->session->set_userdata('mycaptcha', $cap['word']) ;
                $this->session->set_flashdata('message',
                                             'Captcha yang anda masukan salah!!') ;
            }
            $data['title'] = "Daftar Akun Saya" ;
            $this->load->view('header', $data) ;
            $this->load->view('register') ;
            $this->load->view('footer') ;
        }
    }

}

?>