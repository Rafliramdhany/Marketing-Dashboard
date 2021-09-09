<section class="content-header">
    <h1>REPORTS
        <small>Storage</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-inbox"></i></a></li>
        <li class="active">Reports/view</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Laporan</h3>
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
                        <th>Cetak</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data->result_array() as $i) :
                        $request_id = $i['request_id'];
                        $no_tiket = $i['no_tiket'];
                        $user = $i['user'];
                        $material = $i['material'];
                        $qty = $i['qty'];
                        $status = $i['status'];
                    ?>
                        <tr>
                            <td><?= $no_tiket; ?></td>
                            <td><?= $user; ?></td>
                            <td><?= $material; ?></td>
                            <td><?= $qty; ?></td>
                            <?php
                            if ($status == "completed") {
                                echo "<td><span class='label label-success'>Completed</span></td>";
                            } else {
                                echo "<td><span class='label label-info'>Processing</span></td>";
                            }
                            ?>
                            <?php if ($status == "completed") { ?>
                                <td>
                                    <a href="<?= base_url('requesthadd/print/' . $request_id) ?>" target="_blank" class="btn btn-xs btn-default">
                                        <i class="fa fa-print"></i> Print</a>
                                </td>
                            <?php } else {
                                echo "<td><span class='label label-info'>Processing</span></td>";
                            }
                            ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</section>