<section class="content-header">
    <h1>REQUEST
        <small>Storage</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-inbox"></i></a></li>
        <li class="active">Request/view</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Request</h3>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No. Tiket</th>
                        <th>User</th>
                        <th>Material</th>
                        <th>Qty</th>
                        <th>Step 4</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data->result_array() as $i) :
                        $no_tiket = $i['no_tiket'];
                        $user = $i['user'];
                        $material = $i['material'];
                        $qty = $i['qty'];
                        $no_po = $i['no_po'];
                    ?>
                        <tr>
                            <td><?= $no_tiket; ?></td>
                            <td><?= $user; ?></td>
                            <td><?= $material; ?></td>
                            <td><?= $qty; ?></td>
                            <?php if ($no_po == null) { ?>
                                <td>
                                    <a class="btn btn-xs btn-danger disabled">
                                        <i class=" fa fa-close"></i>
                                    </a>
                                    <a class="btn btn-xs btn-info" data-toggle="modal" data-target="#step4<?= str_replace('#', '', $no_tiket); ?>">
                                        <i class=" fa fa-pencil"></i> Inputkan
                                    </a>
                                </td>
                            <?php } else { ?>
                                <td>
                                    <a class="btn btn-xs btn-info disabled">
                                        <i class=" fa fa-check-square-o"></i>
                                    </a>
                                    <a class="btn btn-xs btn-info" data-toggle="modal" data-target="#step4<?= str_replace('#', '', $no_tiket); ?>">
                                        <i class=" fa fa-edit"></i>
                                    </a>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</section>

<?php
foreach ($data->result_array() as $i) :
    $no_tiket = $i['no_tiket'];
    $user = $i['user'];
    $material = $i['material'];
    $qty = $i['qty'];
    $status_pr = $i['status_pr'];
    $no_po = $i['no_po'];
?>
    <div class="modal fade" id="step4<?= str_replace('#', '', $no_tiket); ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="myModalLabel">Step 4</h3>
                </div>
                <form class="form-horizontal" method="post" action="<?= site_url('requesthin/step4') ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label col-xs-3">No. PO</label>
                            <div class="col-xs-8">
                                <input name="no_tiket" value="<?= $no_tiket; ?>" class="form-control" type="hidden" required>
                                <?php
                                if ($status_pr == Null) {
                                    echo "<input name='no_po' class='form-control' value='$no_po' type='text' required disabled>";
                                } else {
                                    echo "<input name='no_po' class='form-control' value='$no_po' type='text' required>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <?php
                        if ($status_pr == Null) {
                            echo "<button class='btn btn-info disabled'>Simpan</button>";
                        } else {
                            echo "<button class='btn btn-info'>Simpan</button>";
                        }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>