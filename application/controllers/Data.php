<?php

   class Data extends CI_Controller{

    function get_ajax() {
        $list = $this->ModelData->get_datatables();
        $data = array();
        $no = @$_POST['start'];
        foreach ($list as $item) {
            $no++;
            $row = array();
            $row[] = $no.".";
            $row[] = $item->nik;
            $row[] = $item->nama_kk;
            $row[] = $item->nama_dusun;
            $row[] = $item->nama_jalan;
            $row[] = $item->nama_gang;
            $row[] = '<a href="'.base_url('data/edit/'.$item->id_kk).'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Update</a>
                   <a href="'.base_url('data/del/'.$item->id_kk).'" onclick="return confirm(\'Yakin hapus data?\')"  class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>';
            // $row[] = $item->stock;
            // $row[] = $item->image != null ? '<img src="'.base_url('uploads/product/'.$item->image).'" class="img" style="width:100px">' : null;
            // // add html for action
            // $row[] = '<a href="'.site_url('item/edit/'.$item->item_id).'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Update</a>
            //         <a href="'.site_url('item/del/'.$item->item_id).'" onclick="return confirm(\'Yakin hapus data?\')"  class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>';
            $data[] = $row;
        }
        $output = array(
                    "draw" => @$_POST['draw'],
                    "recordsTotal" => $this->ModelData->count_all(),
                    "recordsFiltered" => $this->ModelData->count_filtered(),
                    "data" => $data,
                );
        // output to json format
        echo json_encode($output);
    }
        public function Penduduk(Type $var = null)
        {
            $data   = [
                'title'     => 'Sekdes',
                'user'      => $this->db->get_where('user',['email'=>$this->session->userdata('email')])->row_array()
            ];      
            $this->load->view('header',$data);
            $this->load->view('sidebar',$data);
            $this->load->view('data_penduduk',$data);
            $this->load->view('footer');
            
        }

    }

?>