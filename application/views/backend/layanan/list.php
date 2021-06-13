<h3 class="mt-4">Layanan</h3>
<ol class="breadcrumb mb-4">
	<li class="breadcrumb-item active">List</li>
</ol>
<div class="card mb-4">
	<div class="card-header">
		
		<a href="<?=site_url('backend/layanan/form')?>" type="button" class="btn btn-outline-success btn-sm"><i class="fa fa-plus"></i> Add New</a>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Nama Layanan</th>
						<th>Keterangan</th>
						<th>Gambar</th>
						<th>Action</th>
					</tr>
				</thead>
				<tfoot>
				<tr>
					<th>Nama Layanan</th>
					<th>Keterangan</th>
					<th>Gambar</th>
					<th>Action</th>
				</tr>
				</tfoot>
				<tbody>
					<?php foreach ($datas as $data): ?>
					<tr>
						<td><?=$data->nama_layanan ?></td>
						<td><?=$data->keterangan ?></td>
						<td>
							<?php if ($data->gambar == 'default.png') {?>
                                 <img src="<?=base_url()?>assets/backend/img/default.png" width="60px;"/>
                            <?php } else { ?>
                                <img src="<?php echo base_url('assets/backend/upload/'.$data->gambar) ?>" width="64" />
                            <?php } ?>
						</td>
						<td>
							<a href="<?=site_url('backend/layanan/edit/'.$data->id_layanan)?>" class="btn btn-outline-primary btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="<?=site_url('backend/layanan/delete/'.$data->id_layanan)?>" class="btn btn-outline-danger btn-sm">
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