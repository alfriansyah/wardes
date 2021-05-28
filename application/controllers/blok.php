<?php

    class blok extends CI_Controller{

        public function __construct(Type $var = null)
        {
            parent::__construct();
            $this->load->helper('fungsi');
            // is_logedin();
        }

        public function index(Type $var = null)
        {
            $data 	= [
                'title'	=> "blocked",
                'email' => $this->session->userdata('email'),
                'role_id'=> $this->session->userdata('role_id'),
                'data'   => $this->db->get_where('user_menu',['menu'=>$this->uri->segment(1)])->row_array()
                
            ];
            // $queryMenu['data']  = $this->db->get_where('user_menu',['menu'=>$data['uri']])->row_array();
            
            $this->load->view('header');
            $this->load->view('sidebar',$data);
            $this->load->view('view_blocked',$data,$queryMenu);
            $this->load->view('footer');
        }
    }

?>