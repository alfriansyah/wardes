<?php
    
    class daftar extends CI_Controller{

        // tambah dusun 
        public function index()
        {   
            
            $this->form_validation->set_rules("nama","Nama","required");
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules("password","Password","required");
            $this->form_validation->set_rules("password2","Konfirmasi Password","required|matches[password]");
            
            
            // jika dadftar gagal kembalikan ke halaman ini
            if($this->form_validation->run() == false)
            {
                $this->load->view("view_daftar");
            }
            else{
                $this->ModelDaftar->daftar();
            }
            
        }
    }
?>