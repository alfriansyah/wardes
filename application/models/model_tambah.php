<?php

    // model gak terhubung langsung ke view
    // model di pakai di controller 
    class model_tambah extends CI_Model{
        // tambah
        public function tambah()
        {
            $nama   = $this->input->post('nik',true);
            return $nama;
        }
    }

?>