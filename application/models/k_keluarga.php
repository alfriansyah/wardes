<?php

    
    class k_keluarga extends CI_Model{
        
        // get desa
        public function GetDesa()
        {
            $this->db->order_by('nama_desa','ASC');
            return $this->db->get('desa')->result_array();
        }
        // get dusun
        public function GetDusun($val='')
        {
            $this->db->where('id_desa',$val);
            $this->db->order_by('nama_dusun','asc');
            $query  = $this->db->get('dusun')->result(); // result() , return as objek
            foreach($query as $row){
                echo '<option value="'.$row->id_dusun.'">'. $row->nama_dusun .'</option>';
            }
        }
        // get jalan
        public function GetJalan($val='')
        {
            // pilih jalan yg id_dusunnya $val
            $this->db->where('id_dusun',$val);
            $this->db->order_by('nama_jalan','asc');
            $query  = $this->db->get('jalan')->result();
            foreach($query as $row){
                echo '<option value="'.$row->id_jalan.'">'.$row->nama_jalan.'</option>';
            }
        }
        // get gang
        public function GetGang($val='')
        {
            $this->db->where('id_jalan',$val);
            $this->db->order_by('nama_gang','asc');
            $query = $this->db->get('gang')->result();
            foreach($query as $ros){
                echo '<option value="'.$row->id_gang.'">'.$row->nama_gang.'</option>';
            }
        }
        
        // tambah data gang
        public function TambahGang()
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