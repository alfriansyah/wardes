<?php

    class Profil extends CI_Controller{

        // jika belum login redirect ke controller login
        public function __construct()
        {
            parent::__construct();
            // jika sesion email gak ada redirect ke login
            $this->load->helper('fungsi');
            // jika sesion email gak ada redirect ke login
            is_logedin();
        }

        public function index(Type $var = null)
        {
            // cek user yg masuk siapa dan apa hak aksesnya
            // select * from user where user.email = this->session->userdata('email')
            $data['title']  = 'User';
            $data['user']   = $this->db->get_where('user',['email'=>$this->session->userdata('email')])->row_array();
            $this->load->view('header',$data);
            $this->load->view('sidebar',$data);
            $this->load->view('view_profil',$data);
            $this->load->view('footer');
        }

        public function edit(Type $var = null)
        {
            $data['title']  = 'Profil';
            $data['user']   = $this->db->get_where('user',['email'=>$this->session->userdata('email')])->row_array();
            $data['gambar'] = $_FILES['gambar'];
            $this->form_validation->set_rules('nama','Nama','required');
            $this->form_validation->set_rules('alamat','Alamat','required');
            $this->form_validation->set_rules('hp','Nomor Hp','required');
            // $this->form_validation->set_rules('gambar','Gambar','required');
            if($this->form_validation->run()==false){               
                $this->load->view('header',$data);
                $this->load->view('sidebar',$data);
                $this->load->view('edit/view_edit_profil',$data);
                $this->load->view('footer');
            }else{

                var_dump($_FILES['gambar']);
                $this->ModelProfil->update();
                $this->session->set_flashdata('pesan','<div class="alert alert-warning" role="alert">
                    Profil berhasil di rubah</div>');
                    redirect('profil');
            }
            
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