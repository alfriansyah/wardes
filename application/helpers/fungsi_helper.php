<?php

    // jika belum login redirect ke login
    function is_logedin(Type $var = null)
    {
        $thiss = get_instance();
        if(!$thiss->session->userdata('email')){
            echo "anda belum login";
          redirect('login');
        }else{
            // jika udah login maka cek role_id dan saat ini berada di controller mana
            // jika role_id gak sesuai sam controller maka redirect ke 'block.php'

            // dapatkan role_id dari session
            
            // cari tau role_id nya 
            $role_id   = $thiss->session->userdata('role_id');
            // cari tau sedang berada di controller mana?
            // yang dicari disini adalah 
            $menu      = $thiss->uri->segment(1);            
            // pertanyaannya boleh gak kontroller saat ini di akses oleh user yang role_id nya = $role_id?

            $queryMenu  = $thiss->db->get_where('user_menu',['menu'=>"$menu"])->row_array();
            // ambil role_menu dari menu
            $data['role']  = $queryMenu['role_menu'];

            $userAccess = $thiss->db->get_where('user_access_menu',[
                'role_access' => $role_id,
                'role_menu'   => $data['role']
                ]);
            
            // cocokkan jika role_id dan menu tidak match maka
            if($userAccess->num_rows()<1){
                redirect('blok',$data);
            }
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

    function rolechecked($role,$menu)
    {
        $thiss = get_instance();
        $data = $thiss->db->get_where('user_access_menu',['role_access'=>$role,'role_menu'=>$menu]);

        if($data->num_rows()>0){
            return 'checked="checked"';
        }

    }


?>