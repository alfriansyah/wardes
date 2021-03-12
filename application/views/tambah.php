<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-md-12 col-lg-6">
            <!-- general form elements -->
            <div class="card card-primary">            
            <div class="form-group">
                    <label for="exampleInputFile">Export Dari Excel</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name='exportdata' class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Pilih File</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
              <div class="card-header">
                <h3 class="card-title">Tambah Data Kartu Keluarga</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method='post'>
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">NIK</label>
                    <input type="number" name='nik' class="form-control" id="exampleInputEmail1" placeholder="NIK">
                  </div>
                  <div class="form-group">
                    <label for="kepalakeluarga">Nama Kepala Keluarga</label>
                    <input type="text" name='nama_kk' class="form-control" id="kepalakeluarga" placeholder="">
                  </div>
                  <!-- desa -->
                  <div class="form-grou">
                    <label for="">Alamat</label>
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Desa</label>
                    </div>
                    <select name='desa' class="custom-select" id="inputGroupSelect01">
                        <option selected>Bandar Khalipah</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    </div>
                    <!-- end desa -->
                    <!-- dusun -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Dusun</label>
                    </div>
                    <select name='dusun' class="custom-select" id="inputGroupSelect01">
                        <option selected>Dusun IX</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    </div>
                    <!-- end dusun -->
                    <!-- jalan -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">jalan</label>
                    </div>
                    <select name='jalan' class="custom-select" id="inputGroupSelect01">
                        <option selected>Jl. Puskesmas</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    </div>
                    <!-- end jalan -->
                    <!-- gang -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Gang</label>
                    </div>
                    <select name='gang' class="custom-select" id="inputGroupSelect01">
                        <option selected>Teratai 13</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    </div>
                    <!-- end gang -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type='reset' class="btn btn-danger">Reset</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>