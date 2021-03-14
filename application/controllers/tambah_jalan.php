<?php

    class tambah_jalan extends CI_Controller{

        // tampilan 
        public function index($tingkat= null)
        {   
            
            // jika tambah inser gagal balik ke halamn ini
            $this->form_validation->set_rules('jalan','Jalan','required');
            $this->form_validation->set_rules('dusun','Dusun','required');
            if($this->form_validation->run() == FALSE){
            $data['header']     = 'hold-transition sidebar-mini layout-fixed';
            $data['wrapper']    = 'wrapper';
            $data['jalan']       = $this->model_jalan->getdusun();
            $this->load->view('header',$data);
            $this->load->view('sidebar');
            $this->load->view('tambah_jalan');
            $this->load->view('footer');
            }
            else{
                // 
                $this->model_jalan->tambahjln();
                // alihkan ke base home
                redirect('home');
            }
        }
        
    }

?>