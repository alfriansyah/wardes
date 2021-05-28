<?php

   class Data extends CI_Controller{

        public function Penduduk(Type $var = null)
        {
            $data   = [
                'title'     => 'Sekdes',
                'user'      => $this->db->get_where('user',['email'=>$this->session->userdata('email')])->row_array()
            ];      
            $this->load->view('header',$data);
            $this->load->view('sidebar',$data);
            $this->load->view('data_penduduk',$data);
            $this->load->view('footer');
            
        }

    }

?>