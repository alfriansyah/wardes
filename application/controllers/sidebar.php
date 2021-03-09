<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class sidebar extends CI_Controller {

	public function index()
	{
        $data['header']     = 'hold-transition sidebar-mini layout-fixed';
        $data['wrapper']    = 'wrapper';
        $this->load->view('header',$data);
		$this->load->view('sidebar');
        $this->load->view('footer');
	}
}


?>