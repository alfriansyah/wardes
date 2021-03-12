<div class="container">
    <div class="row">
        <?= validation_errors() ?>
        <form role='form' method='post'>
            <div class="card-body">
            <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Desa</label>
                    </div>
                    <select name='desa' class="custom-select" id="inputGroupSelect01">                    
                        <?php  foreach($desa as $desa): ?>
                            <option value='<?= $desa['id_desa'] ?>' ><?= $desa['nama_desa'] ?> </option>
                        <?php endforeach ?>
                    </select>                    
                    </div>
                    <!-- end gang -->
                </div>
                <div class="form-group">
                    <label for="kepalakeluarga">Tambah Dusun</label>
                    <input type="text" name='dusun' class="form-control" id="kepalakeluarga" placeholder="">
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