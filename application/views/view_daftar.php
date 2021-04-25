<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Daftar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html">Bandar Khalipah</a>
  </div>
  <div class="card">
    <div class="card-body register-card-body">
      <form  method="post">
        <div class="form-group mb-3">
          <label for="">Nama</label>
          <input type="text" name="nama" class="form-control" placeholder="" value="<?= set_value('nama')?>">
          <?= form_error('nama','<small class="text-danger  ">','</small>') ?>
        </div>
        <div class="form-group mb-3">
          <label for="">Email</label>
          <input type="email" name="email" class="form-control" placeholder="" value="<?= set_value('email') ?>">
          <?= form_error('email','<small class="text-danger ">','</small>') ?>
        </div>
        <div class="form-group mb-3">
          <label for="">Password</label>
          <input type="password" name="password" id="password" class="form-control" placeholder="Jangan gunakan nama atau tanggal lahir" value="<?= set_value('password')?>">
          <?= form_error('password','<small class="text-danger ">','</small>') ?>
        </div>
        <div class="form-group mb-3">
          <label for="">Konfirmasi Password</label>
          <input type="password" name="password2" id="password2" class="form-control" placeholder="" value="<?= set_value('password2')?>">
          <?= form_error('password2','<small class="text-danger ">','</small>') ?>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="icheck-primary">
              <label for="agreeTerms">
               Dengan mendaftar anda menyetujui <a href="#">syarat dan ketentuan</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <div class="row">            
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" id="submit" class="btn btn-primary btn-block">Daftar</button>
          </div>
        </div>
      </form>

      <a href="login.html" class="text-center">Sudah punya akun ? Login disini</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
</script>
<!-- jQuery -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>
