<?php

    class tambah extends CI_Controller{

        public function index(Type $var = null)
        {
            redirect("home");
        }
        // tambah dusun 
        public function Dusun($tingkat= null)
        {   
            
            // jika tambah inser gagal balik ke halamn ini
            $this->form_validation->set_rules('dusun','dusun','required');
            $this->form_validation->set_rules('desa','Desa','required');
            if($this->form_validation->run() == FALSE){
            $data['desa']       = $this->ModelDusun->getdesa();
            $data['dusun']      = $this->ModelDusun->GetDusun();            
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
            $data['jalan']       = $this->ModelJalan->getdusun();
            $this->load->view('header',$data);
            $this->load->view('sidebar');
            $this->load->view('tambah_jalan');
            $this->load->view('footer');
            }
            else{
                // tambahkan jalan ke database 
                $this->ModelJalan->tambahjln();
                // kemudian alihkan ke base home
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

                // tampilan 
        public function KartuKeluarga($tingkat= null)
        {   
            // $this->load->model('k_keluarga');
            // jika tambah ikartu kelauarga gagal balik ke halamn ini
            $this->form_validation->set_rules('nik','Nik','required');
            $this->form_validation->set_rules('nama','Nama','required');
            $this->form_validation->set_rules('dusun','Dusun','required');
            $this->form_validation->set_rules('jalan','Jalan','required');
            $this->form_validation->set_rules('gang','Gang','required');
            $this->form_validation->set_rules('latitude','Latitude');
            $this->form_validation->set_rules('longitude','Longitude');
            if($this->form_validation->run() == FALSE){
                $data   = [
                    'header'    =>  'hold-transition sidebar-mini layout-fixed',
                    'wrapper'   =>  'wrapper',
                    'desa'      => 'Bandar Khalipah',
                    'pos'       => 20371,
                    'desa'      => 3,
                    'dusun'     => $this->ModelKartuKeluarga->GetDusun(),
                    'jalan'     => $this->ModelKartuKeluarga->GetJalan(),
                    'gang'      => $this->ModelKartuKeluarga->GetGang(),
                ];
            $this->load->view('header',$data);
            $this->load->view('sidebar');
            $this->load->view('ViewKartuKeluarga',$data);
            $this->load->view('footer');
            }
            // jika berhasil insert data dan redirect ke home
            else{
                // 
                $this->ModelKartuKeluarga->TambahKartuKeluarga();
                redirect('tambah/kartukeluarga');
            }
        }

         // dusun
        // data ini dikirm ke model
        public function Dusun1()
        {
            // $id_desa = $this->input->post('desa');//dari  data{desa:} pada ajax
            // kirim id_desa dan return hasil nya
            return  $this->ModelKartuKeluarga->GetDusun();
        }

        // jalan
        public function Jalan1()
        {
            $id_desa = $this->input->post('dusun');//dari  data{desa:} pada ajax
            // kirim id_desa dan return hasil nya
            echo $this->ModelKartuKeluarga->GetJalan($id_desa);
        }

        // gang
        public function Gang1()
        {
            $id_jalan = $this->input->post('jalan');
            echo $this->ModelKartuKeluarga->GetGang($id_jalan);
        }

    }

?>