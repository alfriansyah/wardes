<?php

    class kadus extends CI_Controller{

        // jika belum login redirect ke controller login
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('fungsi');            
            // jika sesion email gak ada redirect ke login , is_logedin dibuat di helper
            is_logedin();
        }

        
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