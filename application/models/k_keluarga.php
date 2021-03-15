<?php

    
    class k_keluarga extends CI_Model{
        
        // get desa
        public function getdesa()
        {
            return $this->db->get('desa')->result_array();
        }
        // get dusun
        public function getdusun()
        {
            return $this->db->get('dusun')->result_array();
        }
        // get jalan
        public function getjalan()
        {
            return $this->db->get('jalan')->result_array();
        }
        // get gang
        public function getgang()
        {
            return $this->db->get('gang')->result_array();
        }
        
        // tambah data gang
        public function tambahgang()
        {           
            // siapkan data 
            $gang = [
                'id_gang'    => uniqid(),
                'id_jalan'   => $this->input->post('jalan'),
                'nama_gang' => $this->input->post('gang'),
            ];
            $this->db->insert('gang',$gang);
        } 
    }

?>