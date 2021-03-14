<div class="container ml-3">
    <div class="row">
        <?= validation_errors() ?>
        <form role='form' method='post'>
            <div class="card-body">
            <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Tambah Gang</label>
                    </div>
                    <select name='jalan' class="custom-select" id="inputGroupSelect01">                    
                        <?php  foreach($jalan as $jalan): ?>
                            <option value='<?= $jalan['id_jalan'] ?>' ><?= $jalan['nama_jalan'] ?> </option>
                        <?php endforeach ?>
                    </select>                    
                    </div>
                    <!-- end gang -->
                </div>
                <div class="form-group">
                    <label for="kepalakeluarga">Tambah Gang</label>
                    <input type="text" name='gang' class="form-control" id="kepalakeluarga" placeholder="">
                </div>
            </div>
            <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type='reset' class="btn btn-danger">Reset</button>
                </div>            
        </form>
    </div>
</div>

<?php // foreach($desa as $desa) {
    var_dump($desa);

//}?>


<?php ?>