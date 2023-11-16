<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<section class="content">
	<div class="container-fluid">

		<div class="table-responsive-sm">
			<table class="table table-bordered table-hover" id="script">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama Barang</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>1</th>
						<td>Sepatu Adidas</td>
						<td>
							<a href="" class="btn btn-success"><i class="fas fa-eye"></i></a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

	</div>
</section>


<?= $this->endSection(); ?>