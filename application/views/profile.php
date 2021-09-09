<section class="content-header">
    <h1>My
        <small>Profile</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i></a></li>
        <li class="active">My Profile</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img width="100%" src="<?= base_url('assets/img/profile/') . $this->fungsi->user_login()->image;  ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">My Profile</h5>
                    <p class="card-text">Name : <?= $this->fungsi->user_login()->name ?></p>
                    <p class="card-text">Address : <?= $this->fungsi->user_login()->address ?></p>
                    <?php
                    date_default_timezone_set('Asia/Jakarta');
                    $datestring  =  'Y m d - H:i:s';
                    $time  =  time();
                    ?>
                    <p class="card-text"><small class="text-muted">Last Login <?= date($datestring,  $time); ?></small></p>
                    <td>
                        <a href="<?= site_url('user/edit/' . $this->fungsi->user_login()->user_id) ?>" class="btn btn-xs btn-danger">
                            <i class="fa fa-edit"></i>
                        </a>
                    </td>
                </div>
            </div>
        </div>
    </div>
</section>