<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>All you can buy | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="icon" href="http://cdn.ttgtmedia.com/ITKE/uploads/blogs.dir/237/files/2015/05/purchase-order-system-1-0-2-1491829449-600x600.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<style type="text/css">
    .register-page {
        background-image: url("<?= base_url() ?>assets/img/m.jpg");
        background-size: 100% 730px;
    }
</style>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="<?= site_url('auth/register') ?>"><b>AMAZON.co</b></a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="<?= site_url('auth/add') ?>" method="post">
                <div class="form-group <?= form_error('fullname') ? 'has-error' : null ?>">
                    <input type="text" name="fullname" class="form-control" placeholder="Full name" value="<?= set_value('fullname') ?>" class="form-control">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    <?= form_error('fullname') ?>
                </div>
                <div class="form-group <?= form_error('username') ? 'has-error' : null ?>">
                    <input type="text" name="username" class="form-control" placeholder="Username" value="<?= set_value('username') ?>" class="form-control">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    <?= form_error('username') ?>
                </div>
                <div class="form-group <?= form_error('password') ? 'has-error' : null ?>">
                    <input type="password" name="password" class="form-control" placeholder="Password" value="<?= set_value('password') ?>" class="form-control">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <?= form_error('password') ?>
                </div>
                <div class="form-group <?= form_error('passconf') ? 'has-error' : null ?>">
                    <input type="password" name="passconf" class="form-control" placeholder="Retype password" value="<?= set_value('passconf') ?>" class="form-control">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    <?= form_error('passconf') ?>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="<?= site_url('auth/login') ?>">
                <class="text-center">I already have a membership
            </a>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery 3 -->
    <script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?= base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
</body>

</html>