<?php

    class add_gang extends CI_Controller{

        // tampilan 
        public function index($tingkat= null)
        {   
            
            // jika tambah inser gagal balik ke halamn ini
            $this->form_validation->set_rules('jalan','Jalan','required');
            $this->form_validation->set_rules('gang','Gang','required');
            if($this->form_validation->run() == FALSE){
            $data['header']     = 'hold-transition sidebar-mini layout-fixed';
            $data['wrapper']    = 'wrapper';
            $data['jalan']      = $this->t_gang->getjalan();
            $data['dusun']      = $this->t_gang->GetDusun();
            $this->load->view('header',$data);
            $this->load->view('sidebar');
            $this->load->view('gang');
            $this->load->view('footer');
            }
            else{
                // 
                $this->t_gang->tambahgang();
                // alihkan ke base home
                redirect('home');
            }
        }
        
    }

?>