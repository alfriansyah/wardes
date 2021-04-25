<?php

    class User extends CI_Controller{

        public function index(Type $var = null)
        {
            // cek user yg masuk siapa dan apa hak aksesnya
            // select * from user where user.email = this->session->userdata('email')
            $data['title']  = 'User';
            $data['user']   = $this->db->get_where('user',['email'=>$this->session->userdata('email')])->row_array();
            $this->load->view('header',$data);
            $this->load->view('sidebar',$data);
            $this->load->view('view_user',$data);
            $this->load->view('footer');
        }

        public function logout(Type $var = null)
        {
            unset(
                $_SESSION['email'],
                $_SESSION['role_id']
            );
            $this->session->set_flashdata('pesan','<div class="alert alert-warning" role="alert">
            anda telah logout
          </div>');
            redirect('login');
        }
    }


?>