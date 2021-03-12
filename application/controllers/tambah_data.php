<?php

    class tambah_data extends CI_Controller{
        // index
        public function index()
        {
            $data['header']     = 'hold-transition sidebar-mini layout-fixed';
            $data['wrapper']    = 'wrapper';
            if($this->model_tambah->tambah()){                
                // jika tambah berhasil arahkan ke home dan tampilkan
                $this->load->view('header',$data);
                $this->load->view('sidebar');
                $this->load->view('home');
                $this->load->view('footer');
            }
            $this->load-view('tambah');
        }
    }

?>