<?php

    class Sekdes extends CI_Controller{

        
        public function index(Type $var = null)
        {
            // cek user yg masuk siapa dan apa hak aksesnya
            // select * from user where user.email = this->session->userdata('email')
            $data   = [
                'title'     => 'Sekdes',
                'user'      => $this->db->get_where('user',['email'=>$this->session->userdata('email')])->row_array()
            ];
            $this->load->view('header',$data);
            $this->load->view('sidebar',$data);
            $this->load->view('view_sekdes',$data);
            $this->load->view('footer');
        }

    }

?>