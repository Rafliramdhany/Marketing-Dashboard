<section class="content-header">
	<h1>Request
		<small>Add</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-cart-plus"></i></a></li>
		<li class="active">Request</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">

	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Add Request</h3>
		</div>
		<div class="box-body">
			<div class="row">
				<div class="col-lg-8 col-md-offset-2">
					<form action="<?= site_url('requestadd/process') ?>" method="post">
						<?php $this->view('message') ?>
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Compose New Message</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<div class="form-group">
									<input type="hidden" name="id" value="">
									<input class="form-control" name="to" placeholder="To:" value="Tim-Biru">
								</div>
								<div class="form-group">
									<input class="form-control" name="user" placeholder="From:" value="<?= $this->fungsi->user_login()->name ?>">
								</div>
								<div class="form-group">
									<input class="form-control" name="barang" placeholder="Nama Barang:" value="" required>
								</div>
								<div class="form-group">
									<input class="form-control" name="qty" placeholder="Jumlah Kebutuhan Barang:" value="" required>
								</div>
								<div class="form-group">
									<textarea name="message" class="form-control" style="height: 300px" placeholder="message" value=""></textarea>
								</div>
							</div>
							<div class="box-footer">
								<div class="pull-right">
									<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
								</div>
								<button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
							</div>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
</section>