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
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data->result_array() as $i) :
                        $no_tiket = $i['no_tiket'];
                        $user = $i['user'];
                        $material = $i['material'];
                        $qty = $i['qty'];
                    ?>
                        <tr>
                            <td><?= $no_tiket; ?></td>
                            <td><?= $user; ?></td>
                            <td><?= $material; ?></td>
                            <td><?= $qty; ?></td>
                            <td>
                                <a class="btn btn-xs btn-danger" data-toggle="modal" data-target="#status<?= str_replace('#', '', $no_tiket); ?>">
                                    <i class=" fa fa-search"></i> Cek
                                </a>
                            </td>
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
    $harga_satuan = $i['harga_satuan'];
    $no_pr = $i['no_pr'];
    $status_pr = $i['status_pr'];
    $no_po = $i['no_po'];
    $delivery_date = $i['delivery_date'];
    $no_bast = $i['no_bast'];
    $good_receipt = $i['good_receipt'];
    $no_rks = $i['no_rks'];
    $no_spk = $i['no_spk'];
    $no_invoice = $i['no_invoice'];
?>
    <div class="modal fade" id="status<?= str_replace('#', '', $no_tiket); ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="myModalLabel">Status</h3>
                    <div class="container">
                        <ul class="progressbar">
                            <li class="active">Step 1</li>
                            <?php
                            if ($qty == Null) {
                                echo "<li>Step 2</li>";
                            } else {
                                echo "<li class='active'>Step 2</li>";
                            }
                            ?>
                            <?php
                            if ($harga_satuan == Null) {
                                echo "<li>Step 3</li>";
                            } else {
                                echo "<li class='active'>Step 3</li>";
                            }
                            ?>
                            <?php
                            if ($status_pr == Null) {
                                echo "<li>Step 4</li>";
                            } else {
                                echo "<li class='active'>Step 4</li>";
                            }
                            ?>
                            <?php
                            if ($no_po == Null) {
                                echo "<li>Step 5</li>";
                            } else {
                                echo "<li class='active'>Step 5</li>";
                            }
                            ?>
                            <?php
                            if ($good_receipt == Null) {
                                echo "<li>Step 6</li>";
                            } else {
                                echo "<li class='active'>Step 6</li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="box-body table-responsive">
                        <table class="table table-bordered table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No. Tiket</th>
                                    <td><?= $no_tiket; ?></td>
                                </tr>
                                <tr>
                                    <th>User</th>
                                    <td><?= $user; ?></td>
                                </tr>
                                <tr>
                                    <th>Material</th>
                                    <td><?= $material; ?></td>
                                </tr>
                                <tr>
                                    <th>Qty</th>
                                    <td><?= $qty; ?></td>
                                </tr>
                                <tr>
                                    <th>Harga Satuan</th>
                                    <td><?= $harga_satuan; ?></td>
                                </tr>
                                <tr>
                                    <th>No. PR</th>
                                    <td><?= $no_pr; ?></td>
                                </tr>
                                <tr>
                                    <th>Status PR</th>
                                    <td><?= $status_pr; ?></td>
                                </tr>
                                <tr>
                                    <th>No. PO</th>
                                    <td><?= $no_po; ?></td>
                                </tr>
                                <tr>
                                    <th>Delivery Date</th>
                                    <td><?= $delivery_date; ?></td>
                                </tr>
                                <tr>
                                    <th>No. BAST</th>
                                    <td><?= $no_bast; ?></td>
                                </tr>
                                <tr>
                                    <th>Good Receipt</th>
                                    <td><?= $good_receipt; ?></td>
                                </tr>
                                <tr>
                                    <th>No. RKS</th>
                                    <td><?= $no_rks; ?></td>
                                </tr>
                                <tr>
                                    <th>No. SPK</th>
                                    <td><?= $no_spk; ?></td>
                                </tr>
                                <tr>
                                    <th>No. Invoice</th>
                                    <td><?= $no_invoice; ?></td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>