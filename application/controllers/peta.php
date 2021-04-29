<?php

    class peta extends CI_Controller{

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
            $this->load->view('ViewPeta');
        }
    }

?>