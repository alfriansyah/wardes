<?php

    class ModelProfil extends CI_Model{

        public function update( $var = null)
        {
            $email  = $this->input->post('email');
           var_dump($gambar = $_FILES['gambar']);
            // $data   = [
            //         'nama'  => $this->input->post('nama'),
            //         'alamat'=> $this->input->post('alamat'),
            //         'no_hp' => $this->input->post('nohp'),
            //         'gambar'=> $gambar['gambar']['name'],

            //     ];
            // $this->db->where('email',$email);
            // $this->db->update('user',$data);
            /*  UPDATE user SET nama = $data['nama'] , alamat = $data['alamat'], no_hp = $data['NoHp'],
                gambar=$data['gambar']
                WHERE email = $email
            */
        dir();
        }
    }

?>