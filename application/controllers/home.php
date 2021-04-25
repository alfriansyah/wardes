<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function index()
	{	
		$data 	= [
			'user'	=> $this->db->get_where('user',['email'=>$this->session->userdata('email')])->row_array(),
		];
		
		$this->load->view('header');
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
