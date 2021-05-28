<?php

    class logout extends CI_Controller{

        public function keluar(Type $var = null)
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