<?php

    class detil extends CI_Controller{

        // jika belum login redirect ke controller login
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('fungsi');
            // jika sesion email gak ada redirect ke login
            is_logedin();
        }
        
        // public
        public function index()
        {
            $data['header']     = 'hold-transition sidebar-mini layout-fixed';
            $data['wrapper']    = 'wrapper'; 
            $this->load->view('header',$data);
            $this->load->view('sidebar');
            $this->load->view('detail');
            $this->load->view('footer');
        }
        
    }

?>