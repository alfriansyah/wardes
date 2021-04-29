<?php

    // jika belum login redirect ke login
    function is_logedin(Type $var = null)
    {
        $thiss = get_instance();
        if(!$thiss->session->userdata('email')){
            echo "anda belum login";
          redirect('login');
        }
    }

    // jika sudah login redirect ke home
    function is_logout(Type $var = null)
    {
        $thiss = get_instance();
        if($thiss->session->userdata('email')){
            echo "anda belum login";
          redirect('home');
        }
    }


?>