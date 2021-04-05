<?php

    class kartukeluarga extends CI_Controller{

        // tampilan 
        public function index($tingkat= null)
        {   
            // $this->load->model('k_keluarga');
            // jika tambah inser gagal balik ke halamn ini
            $this->form_validation->set_rules('nik','Nik','required');
            $this->form_validation->set_rules('nama','Nama','required');
            $this->form_validation->set_rules('desa','Desa','required');
            $this->form_validation->set_rules('dusun','Dusun','required');
            $this->form_validation->set_rules('jalan','Jalan','required');
            $this->form_validation->set_rules('gang','Gang','required');
            $this->form_validation->set_rules('rt','Rt','required');
            $this->form_validation->set_rules('rw','Rw','required');
            $this->form_validation->set_rules('tanggal','Tanggal','required');
            if($this->form_validation->run() == FALSE){
                $data   = [
                    'header'    =>  'hold-transition sidebar-mini layout-fixed',
                    'wrapper'   =>  'wrapper',
                    'desa'      => 'Bandar Khalipah',
                    'pos'       => 20371,
                    'desa'      => $this->ModelKartuKeluarga->GetDesa(),
                    'dusun'     => $this->ModelKartuKeluarga->GetDusun(),
                    'jalan'     => $this->ModelKartuKeluarga->GetJalan(),
                    'gang'      => $this->ModelKartuKeluarga->GetGang(),
                ];
            $this->load->view('header',$data);
            $this->load->view('sidebar');
            $this->load->view('ViewKartuKeluarga');
            $this->load->view('footer');
            }
            else{
                // 
                @$this->t_gang->tambahgang();
                // alihkan ke base home
                redirect('home');
            }
        }
        // dusun
        // data ini dikirm ke model
        public function Dusun()
        {
            $id_desa = $this->input->post('desa');//dari  data{desa:} pada ajax
            // kirim id_desa dan return hasil nya
            echo $this->ModelKartuKeluarga->GetDusun($id_desa);
        }

        // jalan
        public function Jalan()
        {
            $id_desa = $this->input->post('dusun');//dari  data{desa:} pada ajax
            // kirim id_desa dan return hasil nya
            echo $this->ModelKartuKeluarga->GetJalan($id_desa);
        }

        // gang
        public function Gang()
        {
            $id_jalan = $this->input->post('jalan');
            echo $this->ModelKartuKeluarga->GetGang($id_jalan);
        }
    }
        
    

?>