<section class="invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-12">
            <h2 class="page-header">
                <i class="fa fa-globe"></i> PurchaseRequest, Inc.
                <small class="pull-right"><?= date('d m Y') ?></small>
            </h2>
        </div>
        <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
        <div class="col-xs-4 invoice-col">
            From
            <address>
                <strong>Admin, Inc.</strong><br>
                PT. PO, Gresik
            </address>
        </div>
        <!-- /.col -->
        <div class="col-xs-4 invoice-col">
            To
            <address>
                <strong><?= $row->user; ?></strong><br>
                <?= $this->fungsi->user_login()->address ?>
            </address>
        </div>
        <!-- /.col -->
        <div class="col-xs-4 invoice-col">
            <b>Invoice #<?= $row->no_invoice; ?></b><br>
            <br>
            <b>Order ID:</b> <?= $row->no_tiket; ?><br>
            <b>Payment Due:</b> <?= $row->good_receipt; ?><br>
            <b>Account:</b> <?= $row->user; ?>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
        <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No. Tiket</th>
                        <th>Qty</th>
                        <th>Product</th>
                        <th>Harga Satuan</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $row->subtotal = $row->qty * $row->harga_satuan ?>
                    <tr>
                        <td><?= $row->no_tiket; ?></td>
                        <td><?= $row->qty; ?></td>
                        <td><?= $row->material; ?></td>
                        <td>Rp. <?= number_format($row->harga_satuan, 0, ',', ','); ?>,-</td>
                        <td>Rp. <?= number_format($row->subtotal, 0, ',', ','); ?>,-</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-5">
            <p class="lead">Payment Methods:</p>
            <img src="<?= base_url() ?>assets/dist/img/credit/visa.png" alt="Visa">
            <img src="<?= base_url() ?>assets/dist/img/credit/mastercard.png" alt="Mastercard">
            <img src="<?= base_url() ?>assets/dist/img/credit/american-express.png" alt="American Express">
            <img src="<?= base_url() ?>assets/dist/img/credit/paypal2.png" alt="Paypal">

            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                Lakukan Pembayaran Ke Bank Terverifikasi.
            </p>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
            <p class="lead">Amount Due <?= $row->good_receipt; ?></p>

            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>Rp. <?= number_format($row->subtotal, 0, ',', ','); ?>,-</td>
                    </tr>
                    <tr>
                        <th>Total:</th>
                        <td>Rp. <?= number_format($row->subtotal, 0, ',', ','); ?>,-</td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<script>
    window.print();
</script>