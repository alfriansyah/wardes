<?php

    
    class ModelGang extends CI_Model{
        
        // tambah data gang
        public function tambahgang()
        {           
            // siapkan data 
            $gang = [
                'id_gang'    => uniqid(),
                'id_jalan'   => $this->input->post('jalan',true),
                'nama_gang'  => $this->input->post('gang',true),
            ];
            $this->db->insert('gang',$gang);
        } 
        
        // get jalan
        public function GetDusun()
        {
            return $this->db->get('dusun')->result_array();
        }
        // get jalan
        public function GetJalan($val='')
        {
           $this->db->where('id_dusun',$val);
           $this->db->order_by('nama_jalan',);
           $query   = $this->db->get('jalan')->result();
           foreach($query as $row){
               echo '<option value="'.$row->id_jalan.'">'.$row->nama_jalan.'</option>';
           }
        }
    }

?>