<?php

    
    class ModelDusun extends CI_Model{
        
        // tambah data dusun
        public function tambahdsn()
        {           
            // siapkan data 
            $dusun = [
                'id_dusun'  => uniqid(),
                'id_desa'   => $this->input->post('desa',true),
                'nama_dusun'=> $this->input->post('dusun',true),
            ];
            $this->db->insert('dusun',$dusun);
        } 
        
        // get desa
        public function getdesa()
        {
            return $this->db->get('desa')->result_array();
        }

        // edit dusun 
        public function EditDusun(Type $var = null)
        {
            $dusun= [
                'id_dusun'  => $this->input->post('id_dusun',true),
                'nama_dusun'=> $this->input->post('nama',true),
            ];
            $this->db->where('id_dusun');
            $this->db->update('dusun',$dusun);
        }
    }

?>