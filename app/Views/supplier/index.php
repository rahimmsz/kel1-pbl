<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="content">
	<div class="container-fluid">
		<a href="<?= base_url('/supplier/tambah'); ?>" class="btn btn-success mb-3"><i class="fas fa-plus-circle mr-2"></i>Tambah Data</a>
		<div class="table-responsive-sm text-center">
			<table class="table table-bordered table-sm">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama Supplier</th>
						<th scope="col">Kontak</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>1</th>
						<td>Ahdi</td>
						<td>@ahdi_sabani</td>
						<td>
							<a href="" class="btn btn-warning"><i class="fas fa-edit"></i></a>
							<a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

	</div>
</section>

<?= $this->endSection(); ?>