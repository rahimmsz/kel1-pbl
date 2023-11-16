<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content">
	<div class="container-fluid">

		<?php if (session()->get('role') == "Owner") : ?>
			<a href="/barang/form_tambah" class="btn btn-primary mb-4"><i class="fas fa-plus-circle mr-2"></i>Tambah Data</a>
		<?php endif; ?>

		<?php if (session()->getFlashdata('pesan')) : ?>
			<div class="alert alert-success" role="alert">
				<?= session()->getFlashdata('pesan'); ?>
			</div>
		<?php endif ?>

		<div class="table-responsive-sm text-center">
			<table class="table table-bordered table-sm">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama Barang</th>
						<th scope="col">Jumlah</th>
						<th scope="col">Kategori</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1 ?>
					<?php foreach ($barang as $brg) : ?>
						<tr>
							<th><?= $no++; ?></th>
							<td><?= $brg['nama_barang']; ?></td>
							<td><?= $brg['jumlah']; ?></td>
							<td><?= $brg['nama_kategori']; ?></td>
							<td>
								<a href="<?= base_url('/barang/detail' . '/' . $brg['id_barang']) ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>

								<?php if (session()->get('role') == "Owner") : ?>
									<a href="<?= base_url('/barang/edit/' . '/' . $brg['id_barang']); ?>" class="btn btn-warning"><i class="fas fa-pen-alt"></i></a>

									<form action="<?= base_url('/barang' . '/' . $brg['id_barang']); ?>" class="d-inline" method="POST">
										<?= csrf_field(); ?>
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')"><i class="fas fa-trash-alt"></i></button>
									</form>

								<?php endif; ?>

							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</section>
<?= $this->endSection(); ?>