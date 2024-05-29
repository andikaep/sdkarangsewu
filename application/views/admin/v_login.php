<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> SD KARANGSEWU | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/iCheck/square/blue.css'?>">

  <meta name="viewport" content="width=device-width, user-scalable=1, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/min/main.min.css">
<script src="<?php echo base_url(); ?>assets/vendor/modernizr.js"></script>

<style>
           <div class="college_gallery">
                                  <div style="background-color:#fffdd9;height:35px;font-size:16px;border-bottom:1px solid #ccc;"><h4 style="padding-top:5px;padding-left:9px;">Gallery Photo</h4></div>
        </style>
  
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div>
   <p><?php echo $this->session->flashdata('msg');?></p>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"> <img src="<?php echo base_url().'assets/images/login.png'?>"></p><hr/>
    <p><i class="fa fa-info-circle mg-r-md text-danger"></i><i>Silahkan login untuk menggunakan sistem</i></p>

    <form action="<?php echo base_url().'administrator/auth'?>" method="post">
      <div class="input-group input-group-md mg-b-md">
       <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" name="username" class="form-control" placeholder="Username">

      </div>
      <p>
      </p>
      <div class="input-group input-group-md mg-b-md">
      <span class="input-group-addon"><i class="fa fa-key"></i></span>
        <input type="password" name="password" class="form-control" placeholder="Password">
        
      </div>
      <p>
      </p>
      <button class="btn btn-md btn-info btn-block mg-t-md hidden-xs" type="submit"><i class="fa fa-sign-in mg-r-sm"></i> Login</button>
      <button class="btn btn-lg btn-info btn-block mg-t-lg visible-xs" type="submit"><i class="fa fa-sign-in mg-r-sm"></i> Login</button>
    </form>

    

    
    <!-- /.social-auth-links -->
    <hr/>
    <p><center>Copyright <?php echo date('Y');?> by KP <br/> All Right Reserved</center></p>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->      

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url().'assets/plugins/iCheck/icheck.min.js'?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
