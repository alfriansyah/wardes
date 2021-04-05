<div class="container ml-3">
    <div class="row">
        <?= validation_errors() ?>
        <form role='form' method='post'>
            <div class="card-body">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Pilih Dusun</label>
                        </div>
                            <select name='dusun' id='dusun' class="custom-select" >  
                                <option>Pilih Dusun</option>                  
                                <?php  foreach($dusun as $dusun): ?>
                                    <option value='<?= $dusun['id_dusun'] ?>' ><?= $dusun['nama_dusun'] ?> </option>
                                <?php endforeach ?>
                            </select>                    
                        </div>
                    <!-- end gang -->
                    </div>
                
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Pilih Jalan</label>
                        </div>
                            <select name='jalan' id='jalan' class="custom-select" id="inputGroupSelect01">
                                <option >Pilih Jalan</option>
                            </select>                    
                        </div>
                    <!-- end gang -->
                    </div>
                
                <div class="form-group">
                    <label for="kepalakeluarga">Tambah Gang</label>
                    <input type="text" name='gang' class="form-control" id="gang" placeholder="">
                </div>
            </div> <!-- card-body -->
            <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type='reset' class="btn btn-danger">Reset</button>
                </div>            
        </form>
    </div>
</div>

<script>
    $(document).ready(function(){

        //jalan 
        $('#dusun').change(function(){
            // get value #dusun
            var    id_dusun = $(this).val();
            // jalankan ajax
            $.ajax({
                // sumber data
                url     : "<?php base_url()?>idjalan",
                method  : 'POST',
                data    : {dusun:id_dusun},
                success : function(data){
                    console.log(data);
                    $('#jalan').html(data);
                }
            })
        })

    })
</script>