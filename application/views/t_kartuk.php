<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-6">
            <form role='form' method='post'>
                <div class="form-group">
                    <label for="nik">Nomor KK</label>
                    <input type="number" class="form-control" name='nik' id="nik" placeholder="masukkan nomor KK">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Kepala Keluarga</label>
                    <input type="text" name='nama' class="form-control" id="nama" placeholder="masukkan nama kepala keluarga">
                </div>
                <div class="form-group">
                    <label for="nik">Nomor KK</label>
                    <input type="number" class="form-control" name='nik' id="nik" placeholder="masukkan nomor KK">
                </div>
                <label for="">Alamat</label>
                <div class="form-row">
                <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Desa</label>
                            <select class="form-control" name='jalan' id="dusun">
                                <option>Pilih</option>
                                <?php foreach ($desa as $desa): ?>
                                <option value="<?= $desa['id_desa']?>"><?= $desa['nama_desa']?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Dusun</label>
                            <select class="form-control" name='jalan' id="dusun">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Jalan</label>
                            <select class="form-control" name='dusun' id="jalan">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Gang</label>
                            <select class="form-control" name='gang' id="gang">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <!--Google map-->
<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
  <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
    style="border:0" allowfullscreen></iframe>
</div>
                    <div class="col-auto my-1">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>