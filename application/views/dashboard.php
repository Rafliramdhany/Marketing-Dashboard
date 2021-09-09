<section class="content-header">
    <h1>Dashboard
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3 id="a"><?= $a; ?></h3>

                    <p>New Requests</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="<?= base_url('requestbin') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3 id="b"><?= $b; ?></h3>

                    <p>Request Added</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?= base_url('requestbstatus') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3 id="c"><?= $c; ?></h3>

                    <p>User Registrations</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="<?= base_url('user') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3 id="d"><?= $d; ?></h3>

                    <p>Request Completed</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="<?= base_url('reports') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <div class="row">
        <div class="col-xs-12">
            <!-- interactive chart -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <i class="fa fa-bar-chart-o"></i>

                    <h3 class="box-title">Interactive Area Chart</h3>
                </div>
                <div class="box-body">
                    <div id="highcharts" style="height: 300px; padding: 0px; position: relative;"></div>
                </div>
                <!-- /.box-body-->
            </div>
            <!-- /.box -->

        </div>
        <!-- /.col -->
    </div>
    <div class="row">
        <div class="col-xs-7">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Latest Orders</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Material</th>
                                    <th>Qty</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($x->result_array() as $i) :
                                    $no_tiket = $i['no_tiket'];
                                    $material = $i['material'];
                                    $qty = $i['qty'];
                                    $status = $i['status'];
                                    $created = $i['created'];
                                ?>
                                    <tr>
                                        <td><a data-toggle="modal" data-target="#status<?= str_replace('#', '', $no_tiket); ?>"><?= $no_tiket; ?></a></td>
                                        <td><?= $material; ?></td>
                                        <td><?= $qty; ?></td>
                                        <?php
                                        if ($status == "completed") {
                                            echo "<td><span class='label label-success'>Completed</span></td>";
                                        } else {
                                            echo "<td><span class='label label-info'>Processing</span></td>";
                                        }
                                        ?>
                                        <?php
                                        $now_timestamp = strtotime(date('Y-m-d H:i:s'));
                                        $diff_timestamp = $now_timestamp - strtotime($created);

                                        if ($diff_timestamp < 60) {
                                            echo "<td><small class='label label-default'><i class='fa fa-clock-o'></i> few seconds ago</small></td>";
                                        } else if ($diff_timestamp >= 60 && $diff_timestamp < 3600) {
                                            echo "<td><small class='label label-default'><i class='fa fa-clock-o'></i> " . round($diff_timestamp / 60) . " mins</small>" . "</td>";
                                        } else if ($diff_timestamp >= 3600 && $diff_timestamp < 86400) {
                                            echo "<td><small class='label label-default'><i class='fa fa-clock-o'></i> " . round($diff_timestamp / 3600) . " hours</small>" . "</td>";
                                        } else if ($diff_timestamp >= 86400 && $diff_timestamp < (86400 * 30)) {
                                            echo "<td><small class='label label-default'><i class='fa fa-clock-o'></i> " . round($diff_timestamp / (86400)) . " days</small>" . "</td>";
                                        } else if ($diff_timestamp >= (86400 * 30) && $diff_timestamp < (86400 * 365)) {
                                            echo "<td><small class='label label-default'><i class='fa fa-clock-o'></i> " . round($diff_timestamp / (86400 * 30)) . " months</small>" . "</td>";
                                        } else {
                                            echo "<td><small class='label label-default'><i class='fa fa-clock-o'></i> " . round($diff_timestamp / (86400 * 365)) . " years</small>" . "</td>";
                                        }
                                        ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <a href="<?= site_url('requestbadd') ?>" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
                    <a href="<?= site_url('requestbstatus') ?>" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
        <div class="col-xs-5">
            <!-- USERS LIST -->
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Latest Members</h3>

                    <div class="box-tools pull-right">
                        <span class="label label-danger" id="c"><?= $c; ?> Members</span>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <ul class="users-list clearfix">
                        <?php
                        foreach ($u->result_array() as $i) :
                            $image = $i['image'];
                            $name = $i['name'];
                            $created = $i['created'];
                        ?>
                            <li>
                                <img src="<?= base_url('assets/img/profile/') . $image; ?>" alt="User Image">
                                <a class="users-list-name"><?= $name; ?></a>
                                <?php
                                $now_timestamp = strtotime(date('Y-m-d H:i:s'));
                                $diff_timestamp = $now_timestamp - strtotime($created);

                                if ($diff_timestamp < 60) {
                                    echo "<td><small class='label label-default'><i class='fa fa-clock-o'></i> few seconds ago</small></td>";
                                } else if ($diff_timestamp >= 60 && $diff_timestamp < 3600) {
                                    echo "<td><small class='label label-default'><i class='fa fa-clock-o'></i> " . round($diff_timestamp / 60) . " mins</small>" . "</td>";
                                } else if ($diff_timestamp >= 3600 && $diff_timestamp < 86400) {
                                    echo "<td><small class='label label-default'><i class='fa fa-clock-o'></i> " . round($diff_timestamp / 3600) . " hours</small>" . "</td>";
                                } else if ($diff_timestamp >= 86400 && $diff_timestamp < (86400 * 30)) {
                                    echo "<td><small class='label label-default'><i class='fa fa-clock-o'></i> " . round($diff_timestamp / (86400)) . " days</small>" . "</td>";
                                } else if ($diff_timestamp >= (86400 * 30) && $diff_timestamp < (86400 * 365)) {
                                    echo "<td><small class='label label-default'><i class='fa fa-clock-o'></i> " . round($diff_timestamp / (86400 * 30)) . " months</small>" . "</td>";
                                } else {
                                    echo "<td><small class='label label-default'><i class='fa fa-clock-o'></i> " . round($diff_timestamp / (86400 * 365)) . " years</small>" . "</td>";
                                }
                                ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                    <a href="<?= base_url('user') ?>" class="uppercase">View All Users</a>
                </div>
                <!-- /.box-footer -->
            </div>
            <!--/.box -->
        </div>
    </div>
</section>

<Script>
    function displayChart(data) {
        var x = new Array();
        var y = new Array();
        var series = new Array();

        x = new Array();

        data = data;
        $.each(data, function(i, item) {
            x.push(item.created);
            y.push(parseInt(item.jml));
        });
        console.log(x);
        console.log(y);
        series.push({
            name: "Total Request",
            data: y
        });
        console.log(series);
        myChart = Highcharts.chart('highcharts', {
            plotOptions: {
                column: {
                    dataLabels: {
                        enabled: false,
                        color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            exporting: {
                chartOptions: { // specific options for the exported image
                    plotOptions: {
                        series: {
                            dataLabels: {
                                enabled: true
                            }
                        }
                    }
                },
                scale: 3,
                fallBackExportToServer: false
            },
            chart: {
                type: 'area'
            },
            title: {
                text: 'Data Request'
            },
            xAxis: {
                categories: x
            },
            yAxis: {
                title: {
                    text: 'Jumlah'
                },
                stackLabels: {
                    enabled: true,
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.textColor)
                    }
                }
            },
            series: series,
        });
    }

    function loadChart() {
        $.ajax({
            url: '<?php echo base_url(); ?>dashboard/grafik',
            type: 'GET',
            data: {},
            dataType: "json",
            success: function(data) {
                displayChart(data);
            }
        });
    }
    $(document).ready(function() {
        loadChart();
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        setInterval(function() {
            $.ajax({
                url: "<?= base_url() ?>dashboard/newrequest",
                type: "POST",
                dataType: "json",
                data: {},
                success: function(data) {
                    $("#a").html(data.a);
                }
            });
        }, 2000);
    });
    $(document).ready(function() {
        setInterval(function() {
            $.ajax({
                url: "<?= base_url() ?>dashboard/requestadd",
                type: "POST",
                dataType: "json",
                data: {},
                success: function(data) {
                    $("#b").html(data.b);
                }
            });
        }, 2000);
    });
    $(document).ready(function() {
        setInterval(function() {
            $.ajax({
                url: "<?= base_url() ?>dashboard/user",
                type: "POST",
                dataType: "json",
                data: {},
                success: function(data) {
                    $("#c").html(data.c);
                }
            });
        }, 2000);
    });
    $(document).ready(function() {
        setInterval(function() {
            $.ajax({
                url: "<?= base_url() ?>dashboard/completed",
                type: "POST",
                dataType: "json",
                data: {},
                success: function(data) {
                    $("#d").html(data.d);
                }
            });
        }, 2000);
    })
</script>
<?php
foreach ($x->result_array() as $i) :
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
                        <table class="table table-bordered table-striped">
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