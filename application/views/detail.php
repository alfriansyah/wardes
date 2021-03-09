<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <table class="table">
            <thead class=" ">
                <tr>
                    <th colspan='12' class='text-center'>KARTU KELUARGA</th>
                </tr>
                <tr>                    
                    <th colspan='12' class='text-center'><?php echo 'No. KK. '. @$nik ?></th>
                </tr>
                <tr>
                    <th colspan='6'>Nama Kepala Keluarga  <?php for($i=0;$i<2; $i++){echo '&nbsp;';} ?>  = <?php echo @$nama_kk ?></th>
                </tr>
                <tr>                    
                    <th colspan='6'>Alamat <?php for($i=0;$i<36; $i++){echo '&nbsp;';} ?>= <?php echo @$jalan .' '. @$dusun.' '. @$gang.' Desa Bandar Khalipah Kec. Percut Sei Tuan Kab. Deli Serdang Prov. SUMUT' ?></th>
                </tr>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Pendidikan</th>          
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
            </tbody>
            </table>
            <!--  -->
            
        <table class="table">
            <thead class=" ">
                <tr>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Status Perkawinan</th>
                    <th scope="col">Hubungan Keluarga</th>
                    <th scope="col">Kewarganegaraan</th>   
                    <th scope="col">No. Passport</th>
                    <th scope="col">No. KITAP</th>
                    <th scope="col">Nama Ayah</th>
                    <th scope="col">Nama Ibu</th>                  
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
            </tbody>
            </table>
        </div>
        
        <div class="col-md-6">
            koordinat peta
        </div>
    </div>
</div>