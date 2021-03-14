<?php

    
    class model_jalan extends CI_Model{
        
        // tambah data dusun
        public function tambahjln()
        {           
            // siapkan data 
            $dusun = [
                'id_jalan'   => uniqid(),
                'id_dusun'   => $this->input->post('dusun'),
                'nama_jalan' => $this->input->post('jalan'),
            ];
            $this->db->insert('jalan',$dusun);
        } 
        
        // get desa
        public function getdusun()
        {
            return $this->db->get('dusun')->result_array();
        }
    }

?>