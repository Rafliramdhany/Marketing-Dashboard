<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Mau Tuku apo</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" href="http://cdn.ttgtmedia.com/ITKE/uploads/blogs.dir/237/files/2015/05/purchase-order-system-1-0-2-1491829449-600x600.png" type="image/x-icon">
  <link rel="icon" href="http://cdn.ttgtmedia.com/ITKE/uploads/blogs.dir/237/files/2015/05/purchase-order-system-1-0-2-1491829449-600x600.png" type="image/x-icon">
  <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
  <style type="text/css">
    .login-page {
      background-image: url("<?= base_url() ?>assets/img/m.jpg");
      background-size: 100% 730px;
    }

    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #fff;
    }

    .preloader .loading {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      font: 14px arial;
    }

    .button {
      background-color: #0099ff;
      /* Blue */
      border: none;
      color: white;
      padding: 10px 28px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      transition-duration: 0.4s;
      cursor: pointer;
    }

    .button1 {
      background-color: white;
      color: black;
      border: 7px solid #0099ff;
    }

    .button1:hover {
      background-color: #0099ff;
      color: white;
    }
  </style>
  <script>
    $(document).ready(function() {
      $(".preloader").fadeOut();
    })
  </script>
</head>

<body class="hold-transition login-page">
  <div class="preloader">
    <div class="loading">
      <img src="<?= base_url() ?>assets/img/loading.gif" width="80">
      <p>Harap Tunggu</p>
    </div>
  </div>
  <div class="login-box">
    <div class="login-logo">
      <a>Purchase<b>Request</b></a>
    </div>
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <form action="<?= site_url('auth/process') ?>" method="post">
        <div class="form-group has-feedback">
          <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-4">

            <a href="register" class="btn btn-primary btn-block btn-flat">Register</a>

          </div>
          <div class="col-xs-4"></div>
          <div class="col-xs-4">
            <button class="button1" type="submit" name="login">Sign In</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- <script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->

</body>

</html>