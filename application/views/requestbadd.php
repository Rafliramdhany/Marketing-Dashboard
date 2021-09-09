<section class="content-header">
    <h1>Permintaan
        <small>Add</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Request</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Add Permintaan</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-lg-8 col-md-offset-2">
                    <form action="<?= site_url('requestbadd/process') ?>" method="post">
                        <?php $this->view('message') ?>
                        <div class="form-group">
                            <label for="no_tiket">No. Tiket *</label>
                            <input type="text" name="no_tiket" id="no_tiket" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="user">User *</label>
                            <input type="text" name="user" id="user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8">
                                    <label for="material">Material</label>
                                    <input type="text" name="material" id="material" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="qty">Qty</label>
                                    <input type="text" name="qty" id="qty" class="form-control" required><br>
                                    <input type="hidden" name="status" id="status" class="form-control"><br>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                            </div>
                            <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>