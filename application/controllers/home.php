<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function index()
	{
        $data['header']     = 'hold-transition sidebar-mini layout-fixed';
        $data['wrapper']    = 'wrapper';
        $this->load->view('header',$data);
		$this->load->view('home');
        $this->load->view('footer');
	}
}


?>