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
                        <th>Step 2</th>
                        <th>Step 6</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    use phpDocumentor\Reflection\Types\Null_;

                    foreach ($data->result_array() as $i) :
                        $no_tiket = $i['no_tiket'];
                        $user = $i['user'];
                        $material = $i['material'];
                        $qty = $i['qty'];
                        $harga_satuan = $i['harga_satuan'];
                        $no_invoice = $i['no_invoice'];
                    ?>
                        <tr>
                            <td><?= $no_tiket; ?></td>
                            <td><?= $user; ?></td>
                            <td><?= $material; ?></td>
                            <td><?= $qty; ?></td>
                            <?php if ($harga_satuan == null) { ?>
                                <td>
                                    <a class="btn btn-xs btn-danger disabled">
                                        <i class=" fa fa-close"></i>
                                    </a>
                                    <a class="btn btn-xs btn-info" data-toggle="modal" data-target="#step2<?= str_replace('#', '', $no_tiket); ?>">
                                        <i class=" fa fa-pencil"></i> Inputkan
                                    </a>
                                </td>
                            <?php } else { ?>
                                <td>
                                    <a class="btn btn-xs btn-info disabled">
                                        <i class=" fa fa-check-square-o"></i>
                                    </a>
                                    <a class="btn btn-xs btn-info" data-toggle="modal" data-target="#step2<?= str_replace('#', '', $no_tiket); ?>">
                                        <i class=" fa fa-edit"></i>
                                    </a>
                                </td>
                            <?php } ?>
                            <?php if ($no_invoice == null) { ?>
                                <td>
                                    <a class="btn btn-xs btn-danger disabled">
                                        <i class=" fa fa-close"></i>
                                    </a>
                                    <a class="btn btn-xs btn-info" data-toggle="modal" data-target="#step6<?= str_replace('#', '', $no_tiket); ?>">
                                        <i class=" fa fa-pencil"></i> Inputkan
                                    </a>
                                </td>
                            <?php } else { ?>
                                <td>
                                    <a class="btn btn-xs btn-info disabled">
                                        <i class=" fa fa-check-square-o"></i>
                                    </a>
                                    <a class="btn btn-xs btn-info" data-toggle="modal" data-target="#step6<?= str_replace('#', '', $no_tiket); ?>">
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
    $good_receipt = $i['good_receipt'];
    $no_rks = $i['no_rks'];
    $no_spk = $i['no_spk'];
    $no_invoice = $i['no_invoice'];
?>
    <div class="modal fade" id="step2<?= str_replace('#', '', $no_tiket); ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="myModalLabel">Step 2</h3>
                </div>
                <form class="form-horizontal" method="post" action="<?= site_url('requestoin/step2') ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label col-xs-3">Harga Satuan</label>
                            <div class="col-xs-8">
                                <input name="no_tiket" value="<?= $no_tiket; ?>" class="form-control" type="hidden" required>
                                <?php
                                if ($qty == Null) {
                                    echo "<input name='harga_satuan' class='form-control' value='$harga_satuan' type='text' required disabled>";
                                } else {
                                    echo "<input name='harga_satuan' class='form-control' value='$harga_satuan' type='text' required>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <?php
                        if ($qty == Null) {
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

    <div class="modal fade" id="step6<?= str_replace('#', '', $no_tiket); ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="myModalLabel">Step 6</h3>
                </div>
                <form class="form-horizontal" method="post" action="<?= site_url('requestoin/step6') ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label col-xs-3">No. RKS</label>
                            <div class="col-xs-8">
                                <input name="no_tiket" value="<?= $no_tiket; ?>" class="form-control" type="hidden" required>
                                <?php
                                if ($good_receipt == Null) {
                                    echo "<input name='no_rks' class='form-control' value='$no_rks' type='text' required disabled>";
                                } else {
                                    echo "<input name='no_rks' class='form-control' value='$no_rks' type='text' required>";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">No. SPK</label>
                            <div class="col-xs-8">
                                <?php
                                if ($good_receipt == Null) {
                                    echo "<input name='no_spk' class='form-control' value='$no_spk' type='text' required disabled>";
                                } else {
                                    echo "<input name='no_spk' class='form-control' value='$no_spk' type='text' required>";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">No. Invoice</label>
                            <div class="col-xs-8">
                                <?php
                                if ($good_receipt == Null) {
                                    echo "<input name='no_invoice' class='form-control' value='$no_invoice' type='text' required disabled>";
                                } else {
                                    echo "<input name='no_invoice' class='form-control' value='$no_invoice' type='text' required>";
                                }
                                ?>
                                <input name="status" class="form-control" type="hidden">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <?php
                        if ($good_receipt == Null) {
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