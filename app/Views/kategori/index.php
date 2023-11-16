<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content">
	<div class="container-fluid">
		<a href="<?= base_url('/kategori/tambah'); ?>" class="btn btn-primary mb-4"><i class="fas fa-plus-circle mr-2"></i>
			Tambah Data
		</a>

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
						<th scope="col">Nama Kategori</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1 ?>
					<?php foreach ($kategori as $ktg) : ?>
						<tr>
							<th><?= $no++; ?></th>
							<td><?= $ktg['nama_kategori']; ?> </td>
							<td>
								<a class="btn btn-warning" href="<?= base_url('/kategori/edit/' . $ktg['id_kategori']); ?>"><i class="fas fa-edit"></i></a>
								<form action="<?= base_url('/kategori' . '/' . $ktg['id_kategori']); ?>" class="d-inline" method="POST">
									<?= csrf_field(); ?>
									<input type="hidden" name="_method" value="DELETE">
									<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')"><i class="fas fa-trash-alt"></i></button>
								</form>

							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</section>


<?= $this->endSection(); ?>