<?php

    class login extends CI_Controller{

        // index
        public function index()
        {
            $data['header']   = 'hold-transition login-page';
            $data['wrapper']  = 'login-box';
            $this->load->view('header',$data);
            $this->load->view('login');
            $this->load->view('footer');
        }
    }

?>