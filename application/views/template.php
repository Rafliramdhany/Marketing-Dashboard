<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Purchase Request</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="http://cdn.ttgtmedia.com/ITKE/uploads/blogs.dir/237/files/2015/05/purchase-order-system-1-0-2-1491829449-600x600.png" type="image/x-icon">
    <link rel="icon" href="http://cdn.ttgtmedia.com/ITKE/uploads/blogs.dir/237/files/2015/05/purchase-order-system-1-0-2-1491829449-600x600.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/progresbar.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/skins/_all-skins.min.css">
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
    <style type="text/css">
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
    </style>
    <script>
        $(document).ready(function() {
            $(".preloader").fadeOut();
        })
    </script>
</head>

<body class="hold-transition skin-blue sidebar-mini fixed">
    <div class="preloader">
        <div class="loading">
            <img src="<?= base_url() ?>assets/img/loading.gif" width="500">
            <p>
                <align center=" Please Wait "></align>
            </p>
        </div>
    </div>
    <div class=" wrapper">
        <header class="main-header">
            <a href="<?= site_url('dashboard') ?>" class="logo">
                <span class="logo-mini"><b>P</b>r</span>
                <span class="logo-lg"><b>Purchase</b>Request</span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= base_url('assets/img/profile/') . $this->fungsi->user_login()->image; ?>" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?= $this->fungsi->user_login()->username ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="<?= base_url('assets/img/profile/') . $this->fungsi->user_login()->image; ?>" class="img-circle" alt="User Image">
                                    <p><?= $this->fungsi->user_login()->name ?>
                                        <small><?= $this->fungsi->user_login()->address ?></small>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?= site_url('profile') ?>" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?= site_url('auth/logout') ?>" class="btn btn-flat bg-red">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column -->
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?= base_url('assets/img/profile/') . $this->fungsi->user_login()->image; ?>" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?= ucfirst($this->fungsi->user_login()->name) ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
                    </div>
                </div>
                <!-- sidebar menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    <ul class="sidebar-menu" data-widget="tree">
                        <?php if ($this->fungsi->user_login()->level == 1) { ?>
                            <li class="header">Administrator</li>
                            <li <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
                                <a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> <span>Dasboard</span></a>
                            </li>
                        <?php } ?>
                        <?php if ($this->fungsi->user_login()->level == 1 || $this->fungsi->user_login()->level == 5) { ?>
                            <li class="header">Pengguna</li>
                            <li <?= $this->uri->segment(1) == 'requestadd' ? 'class="active"' : '' ?>>
                                <a href="<?= site_url('requestadd') ?>"><i class="fa fa-cart-plus"></i> <span>Add Request</span></a>
                            </li>
                            <li <?= $this->uri->segment(1) == 'requestview' ? 'class="active"' : '' ?>>
                                <a href="<?= site_url('requestview') ?>"><i class="fa fa-shopping-bag"></i> <span>Request Anda</span></a>
                            </li>
                            <li <?= $this->uri->segment(1) == 'statusrequest' ? 'class="active"' : '' ?>>
                                <a href="<?= site_url('statusrequest') ?>"><i class="fa fa-file"></i> <span>Status Request Anda</span></a>
                            </li>
                        <?php } ?>
                        <?php if ($this->fungsi->user_login()->level == 1 || $this->fungsi->user_login()->level == 2) { ?>
                            <li class="header">Tim Biru</li>
                            <li <?= $this->uri->segment(1) == 'requestbin' ? 'class="active"' : '' ?>>
                                <a href="<?= site_url('requestbin') ?>"><i class="fa fa-inbox"></i> <span>Permintaan Masuk</span></a>
                            </li>
                            <li <?= $this->uri->segment(1) == 'requestbadd' ? 'class="active"' : '' ?>>
                                <a href="<?= site_url('requestbadd') ?>"><i class="fa fa-dashboard"></i> <span>Add Permintaan</span></a>
                            </li>
                            <li <?= $this->uri->segment(1) == 'requestbstatus' ? 'class="active"' : '' ?>>
                                <a href="<?= site_url('requestbstatus') ?>"><i class="fa fa-info"></i> <span>Status Permintaan</span></a>
                            </li>
                        <?php } ?>
                        <?php if ($this->fungsi->user_login()->level == 1 || $this->fungsi->user_login()->level == 3) { ?>
                            <li class="header">Tim Oren</li>
                            <li <?= $this->uri->segment(1) == 'requestoin' ? 'class="active"' : '' ?>>
                                <a href="<?= site_url('requestoin') ?>"><i class="fa fa-inbox"></i> <span>Permintaan Masuk</span></a>
                            </li>
                            <li <?= $this->uri->segment(1) == 'requestoadd' ? 'class="active"' : '' ?>>
                                <a href="<?= site_url('requestoadd') ?>"><i class="fa fa-info"></i> <span>Status Permintaan</span></a>
                            </li>
                        <?php } ?>
                        <?php if ($this->fungsi->user_login()->level == 1 || $this->fungsi->user_login()->level == 4) { ?>
                            <li class="header">Tim Hijau</li>
                            <li <?= $this->uri->segment(1) == 'requesthin' ? 'class="active"' : '' ?>>
                                <a href="<?= site_url('requesthin') ?>"><i class="fa fa-inbox"></i> <span>Permintaan Masuk</span></a>
                            </li>
                            <li <?= $this->uri->segment(1) == 'requesthadd' ? 'class="active"' : '' ?>>
                                <a href="<?= site_url('requesthadd') ?>"><i class="fa fa-info"></i> <span>Status Permintaan</span></a>
                            </li>
                        <?php } ?>
                    </ul>
                    <?php if ($this->fungsi->user_login()->level != 5) { ?>
                        <li class="header">Reports</li>
                        <li <?= $this->uri->segment(1) == 'reports' ? 'class="active"' : '' ?>>
                            <a href="<?= site_url('reports') ?>"><i class="fa fa-file"></i> <span>Laporan</span></a>
                        </li>
                    <?php } ?>
                    <li class="header">SETTINGS</li>
                    <?php if ($this->fungsi->user_login()->level == 1) { ?>
                        <li <?= $this->uri->segment(1) == 'user' ? 'class="active"' : '' ?>>
                            <a href="<?= site_url('user') ?>"><i class="fa fa-user-plus"></i> <span>Users</span></a>
                        </li>
                    <?php } ?>
                    <li <?= $this->uri->segment(1) == 'profile' ? 'class="active"' : '' ?>>
                        <a href="<?= site_url('profile') ?>"><i class="fa fa-user"></i> <span>Profile</span></a>
                    </li>
                </ul>
            </section>
        </aside>

        <script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <?php echo $contents ?>
        </div>

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; <?= date('Y') ?> <a href="https://instagram.com/mmuqoffinnuha1?igshid=16vv92hhta21a">Purchase Request</a>.</strong> All rights reserved.
        </footer>

    </div>
    <script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
    <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
    <script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/Flot/jquery.flot.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

    <script src="<?= base_url() ?>assets/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

    <script src="<?= base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/raphael/raphael.min.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>
    <script src="http://code.highcharts.com/modules/offline-exporting.js"></script>
    <script src="http://code.highcharts.com/highcharts-more.js"></script>
    <script>
        $(document).ready(function() {
            $('#table1').DataTable()
        })
    </script>
    <script>
        $(document).ready(function() {
            $("#hobi2").select2({
                placeholder: "Please Select"
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.toggles').click(function() {
                $('.toggles').toggleClass('active')
                $('body').toggleClass('night')
            })
        })
    </script>
</body>

</html>