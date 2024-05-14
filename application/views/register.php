<!DOCTYPE html>
<html>
<head>
  <title>Login | Aplikasi Penggajian</title>
  <link href="<?php echo base_url(); ?>assets/css/login.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="<?php echo base_url(); ?>assets/js/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="container">
    <div class="img">
      <img src="<?php echo base_url(); ?>assets/img/login.svg">
    </div>
    <div class="login-content">
      <form class="user" method="POST" action="<?php echo base_url('register') ?>">
        <img src="<?php echo base_url(); ?>assets/img/avatar.svg">
        <h2 class="title"><font size="5">Daftar Karyawan</font></h2>
        <?php echo $this->session->flashdata('pesan')?>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Nama <?php echo form_error('nama_pegawai', '<div class="text-small text-danger"> </div>')?></h5>
                    <input type="text" class="input" name="nama_pegawai">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>NIK <?php echo form_error('nik', '<div class="text-small text-danger"> </div>')?></h5>
                    <input type="number"  class="input" name="nik">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Jenis Kelamin <?php echo form_error('jenis_kelamin', '<div class="text-small text-danger"> </div>')?></h5>
                    <input type="text"  class="input" name="jenis_kelamin">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Jabatan <?php echo form_error('jabatan', '<div class="text-small text-danger"> </div>')?></h5>
                    <input type="text" class="input" name="jabatan">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Status Karyawan <?php echo form_error('status', '<div class="text-small text-danger"> </div>')?></h5>
                    <input type="text" class="input" name="status">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Username <?php echo form_error('username', '<div class="text-small text-danger"> </div>')?></h5>
                    <input type="text" class="input" name="username">
                 </div>
              </div>
              <div class="input-div pass">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>Password <?php echo form_error('password', '<div class="text-small text-danger"> </div>')?></h5>
                    <input type="password" class="input" name="password">
                 </div>
              </div>
              <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>
</html>
