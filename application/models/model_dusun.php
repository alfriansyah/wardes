<?php

    
    class model_dusun extends CI_Model{
        
        // tambah data dusun
        public function tambahdsn()
        {           
            // siapkan data 
            $dusun = [
                'id_dusun'  => uniqid(),
                'id_desa'   => $this->input->post('desa'),
                'nama_dusun'=> $this->input->post('dusun'),
            ];
            $this->db->insert('dusun',$dusun);
        } 
        
        // get desa
        public function getdesa()
        {
            return $this->db->get('desa')->result_array();
        }
    }

?>