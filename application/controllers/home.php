<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	// jika belum login redirect ke controller login
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('fungsi');
		// jika sesion email gak ada redirect ke login
		is_logedin();
	}

	public function index()
	{	
		$data 	= [
			'user'	=> $this->db->get_where('user',['email'=>$this->session->userdata('email')])->row_array(),
			'title' => 'home',
			'data'   => $this->db->get_where('user_menu',['menu'=>$this->uri->segment(1)])->row_array()
		];
		
		$this->load->view('header',$data);
		$this->load->view('sidebar',$data);
		$this->load->view('home',$data);
		$this->load->view('footer');
	}
	public function logout(Type $var = null)
        {
            unset(
                $_SESSION['email'],
                $_SESSION['role_id']
            );
            $this->session->set_flashdata('pesan','<div class="alert alert-warning" role="alert">
            anda telah logout
          </div>');
            redirect('login');
        }
}
