<?php

    class ModelTest extends CI_Model{

        public function get_menu( $var )
        {
            // pilih url dari user_sub_menu yang url nya = $var (url)
            // return $this->db->get_where('user_sub_menu',['url'=>$var])->row_array();

            // pilih menu dari user_menu yang menu nya = $var
            return $this->db->get_where('user_menu',['menu'=>$var])->row_array();
        }
    }




?>