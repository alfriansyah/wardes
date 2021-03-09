<?php

    class detil extends CI_Controller{

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