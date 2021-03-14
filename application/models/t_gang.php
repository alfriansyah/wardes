<?php

    
    class t_gang extends CI_Model{
        
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
        
        // get jalan
        public function getjalan()
        {
            return $this->db->get('jalan')->result_array();
        }
    }

?>