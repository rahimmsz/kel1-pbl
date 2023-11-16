<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="content">
	<div class="container-fluid">
		<a href="" class="btn btn-success mb-3"><i class="fas fa-plus-circle mr-2"></i>Tambah Data</a>
		<div class="table-responsive-sm">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama Barang</th>
						<th scope="col">Jumlah</th>
						<th scope="col">Tanggal Masuk</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>1</th>
						<td>Sepatu Adidas</td>
						<td>200</td>
						<td>12-12-2002</td>
					</tr>
				</tbody>
			</table>
		</div>

	</div>
</section>

<?= $this->endSection(); ?>