<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KOPIKU | Log In</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css')?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css')?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/awakdewe.css')?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page bg-dark">
<div class="login-box">
  <div class="login-logo">
    <div class="" href="beranda"><b>MOBIL</b>KU</div>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <?php 
    // Cetak jika ada notifikasi 
    if($this->session->flashdata('sukses')) { 
        echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>'; 
        }
        ?>
        <?php echo form_open('login');?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>" required/>
          <?php echo form_error('username'); ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>" required/>
          <?php echo form_error('password'); ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="submit" class="btn btn-block btn-primary" name="btnSubmit" value="Login" />
            <?php echo form_close();?> 
          </div>
          <!-- /.col -->
        </div>
        <div class="text-center mt-3">Return to home, please click
            <a href="/beranda"x>Here</a>
        </div>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <div class="col-10" style="margin-left: 30px;">
        <a href="#" style="width: 100px; margin-right: 13px;" class="btn btn-primary">
          <i class="fab fa-facebook mr-2"></i>
        </a>
        <button type="submit" href="#" style="width: 100px" class="btn btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
        </button>
        </div>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="ForgotPassword"><div class="font-yellow"> I forgot my password</div></a>
      </p>
      <p class="mb-0">
        <a href="<?php echo site_url('register/register')?>" class="text-center font-yellow">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js')?>"></script>

</body>
</html>
