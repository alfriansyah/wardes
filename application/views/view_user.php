
<div class="container">
    <div class="row mt-3">    
        <div class="col-md-12 ">
            <div class="card mt-3" style="width: 18rem;">
            <img class="card-img-top" src="<?= base_url('assets/gambar/').$user['gambar']?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $user['nama']?></h5>
                <p class="card-text"><?= $user['email']?></p>
                <p class="card-text"><?= $user['id_dusun']?></p>
                <a href="#" class="btn btn-primary">Edit</a>
            </div>
            </div>
        </div>
    </div>
</div>