<?php

    class tambah_data extends CI_Controller{
        // index
        public function index()
        {
            $data['header']     = 'hold-transition sidebar-mini layout-fixed';
            $data['wrapper']    = 'wrapper';   
            $this->load->view('header',$data);
            $this->load->view('tambah');
            $this->load->view('footer');
        }
    }

?>