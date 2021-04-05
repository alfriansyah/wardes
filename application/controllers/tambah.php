<?php

    class tambah extends CI_Controller{

        // tambah dusun 
        public function Dusun($tingkat= null)
        {   
            
            // jika tambah inser gagal balik ke halamn ini
            $this->form_validation->set_rules('dusun','dusun','required');
            $this->form_validation->set_rules('desa','Desa','required');
            if($this->form_validation->run() == FALSE){
            $data['header']     = 'hold-transition sidebar-mini layout-fixed';
            $data['wrapper']    = 'wrapper';
            $data['desa']       = $this->ModelDusun->getdesa();
            $this->load->view('header',$data);
            $this->load->view('sidebar');
            $this->load->view('tambah_dusun');
            $this->load->view('footer');
            }
            else{
                // 

                $this->ModelDusun->tambahdsn();
                // alihkan ke base home
                redirect('home');
            }
        }

        public function Jalan(Type $var = null)
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

        // gang 
        public function Gang($tingkat= null)
        {   
            
            // jika tambah insert gagal balik ke halamn ini
            $this->form_validation->set_rules('jalan','Jalan','required');
            $this->form_validation->set_rules('gang','Gang','required');
            if($this->form_validation->run() == FALSE){
                $data['header']     = 'hold-transition sidebar-mini layout-fixed';
                $data['wrapper']    = 'wrapper';
                $data['jalan']      = $this->ModelGang->getjalan();
                $data['dusun']      = $this->ModelGang->GetDusun();
                $this->load->view('header',$data);
                $this->load->view('sidebar');
                $this->load->view('gang');
                $this->load->view('footer');
            }
            else{
                // 
                $this->ModelGang->tambahgang();
                // alihkan ke base home
                redirect('home');
            }
        }

        public function IdJalan()
        {
            $id_desa = $this->input->post('dusun');//dari  data{desa:} pada ajax
            // kirim id_desa dan return hasil nya
            echo $this->ModelGang->GetJalan($id_desa);
        }
        
    }

?>