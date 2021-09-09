<section class="content-header">
    <h1>REQUEST
        <small>Storage</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
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
                        <th>Tanggal</th>
                        <th>User</th>
                        <th>Material</th>
                        <th>Qty</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($row->result() as $key => $data) { ?>
                        <tr>
                            <td>#<?= $data->requestadd_id ?></td>
                            <td><?= $data->created ?></td>
                            <td><?= $data->user ?></td>
                            <td><?= $data->barang ?></td>
                            <td><?= $data->qty ?></td>
                            <td align="center">
                                <a class="btn btn-danger btn-xs" id="set" data-toggle="modal" data-target="#modalView" data-barang="<?= $data->barang ?>" data-user="<?= $data->user ?>" data-created="<?= $data->created ?>" data-message="<?= $data->message ?>">
                                    <i class="fa fa-search"></i> View
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</section>

<div class="modal fade" id="modalView">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="box box-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <div class="box-header with-border">
                        <h3 class="box-title">Read Mail</h3>
                    </div>
                    <div class="box-body no-padding">
                        <div class="mailbox-read-info">
                            <h3><span id="barang"></span></h3>
                            <h5><span id="user"></span>
                                <span class="mailbox-read-time pull-right" id="created"></span></h5>
                        </div>
                        <div class="mailbox-controls with-border text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                                    <i class="fa fa-trash-o"></i></button>
                                <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Reply">
                                    <i class="fa fa-reply"></i></button>
                                <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Forward">
                                    <i class="fa fa-share"></i></button>
                            </div>
                            <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                                <i class="fa fa-print"></i></button>
                        </div>
                        <div class="mailbox-read-message">
                            <span id="message"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', '#set', function() {
            var barang = $(this).data('barang');
            var user = $(this).data('user');
            var created = $(this).data('created');
            var message = $(this).data('message');
            $('#barang').text(barang);
            $('#user').text(user);
            $('#created').text(created);
            $('#message').text(message);
            $('#modal-item').modal('hide');
        })
    })
</script>