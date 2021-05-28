<div class="container">
    <div class="row mt-3">    
        <div class="col-md-6 ">
        <?= form_open_multipart('profil/edit');?>
            <?= validation_errors();  var_dump($gambar)?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email </label>
                    <input type="email" class="form-control" name='email' aria-describedby="emailHelp" value="<?= $user['email'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?= $user['nama'] ?>"  >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?= $user['alamat'] ?>"  >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nomro Hp</label>
                    <input type="text" class="form-control" name="hp" value="<?= $user['no_hp'] ?>"  >
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" name="gambar" onchange="readURL(this);">
                    <img id="preview_img" width="230px" src="<?= base_url('assets/gambar/'). $user['gambar'] ?>"  alt="your image" />
                </div>
                <button type="submit" class="btn btn-primary">Ubah</button>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#preview_img').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<!-- <div class="card mt-3" style="width: 18rem;">
    <img class="card-img-top" src="<?= base_url('assets/gambar/').$user['gambar']?>" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title"><?= $user['nama']?></h5>
        <p class="card-text"><?= $user['email']?></p>
        <p class="card-text"><?= $user['id_dusun']?></p>
        <a href="<?= base_url('profil/edit')?>" class="btn btn-primary">Edit</a>
    </div>

</div> -->