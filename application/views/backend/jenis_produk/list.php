<h3 class="mt-4">Jenis Produk</h3>
<ol class="breadcrumb mb-4">
	<li class="breadcrumb-item active">List</li>
</ol>
<div class="card mb-4">
	<div class="card-header">
		
		<a href="<?=site_url('backend/produk/form')?>" type="button" class="btn btn-outline-success btn-sm"><i class="fa fa-plus"></i> Add New</a>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Jenis Produk</th>
						<th>Keterangan</th>
						<th>Action</th>
					</tr>
				</thead>
				<tfoot>
				<tr>
					<th>Jenis Produk</th>
					<th>Keterangan</th>
					<th>Action</th>
				</tr>
				</tfoot>
				<tbody>
					<?php foreach ($this->parssingproduk->produks as $data): ?>
					<tr>
						<td><?=$data->nama_jenis_produk ?></td>
						<td><?=$data->keterangan ?></td>
						<td>
							<a href="<?=site_url('backend/jenis_produk/edit/'.$data->id_jenis_produk)?>" class="btn btn-outline-primary btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="<?=site_url('backend/jenis_produk/delete/'.$data->id_jenis_produk)?>" class="btn btn-outline-danger btn-sm">
								<i class="fa fa-trash"></i>
							</a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>