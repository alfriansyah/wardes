<?php

    class tambah extends CI_Controller{

        // tampilan 
        public function index($tingkat= null)
        {   
            
            // jika tambah inser gagal balik ke halamn ini
            $this->form_validation->set_rules('dusun','dusun','required');
            $this->form_validation->set_rules('desa','Desa','required');
            if($this->form_validation->run() == FALSE){
            $data['header']     = 'hold-transition sidebar-mini layout-fixed';
            $data['wrapper']    = 'wrapper';
            $data['desa']       = $this->model_dusun->getdesa();
            $this->load->view('header',$data);
            $this->load->view('sidebar');
            $this->load->view('tambahddg');
            $this->load->view('footer');
            }
            else{
                // 

                $this->model_dusun->tambahdsn();
                // alihkan ke base home
                redirect('home');
            }
        }
        
    }

?>