<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KOPIKU | Registration</title>
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
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page bg-dark">
<div class="register-box">
  <div class="register-logo">
    <a style="color: white" href=""><b>MOBIL</b>KU</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>
      <?php echo form_open('register/register');?>
      <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="name" value="<?php echo set_value('name'); ?>" required/>
          <?php echo form_error('name'); ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo set_value('username'); ?>" required/>
          <?php echo form_error('username'); ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>" required/>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <?php echo form_error('email'); ?>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>" required/>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
              </div>
          </div>
          <?php echo form_error('password'); ?>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" name="password_conf" value="<?php echo set_value('password_conf'); ?>" required/>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <?php echo form_error('password_conf'); ?>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="submit" class="btn btn-primary btn-block" name="btnSubmit" value="Sign" />
            <?php echo form_close();?> 
          </div>
          <!-- /.col -->
        </div>
        <div class="text-center mt-3">Return to home, please click
            <a href="/beranda"x>Here</a></div>

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

      <a href="<?php echo site_url('login/')?>" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js')?>"></script>
</body>
</html>
