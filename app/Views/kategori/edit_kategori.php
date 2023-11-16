<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="content">
	<div class="container-fluid">
		<div class="card card-primary">
			<form action="<?= base_url('/kategori/update/' . $kategori['id_kategori']); ?>" method="POST">
				<div class="card-body">

					<?php if (!empty(session()->getFlashdata('errors'))) : ?>
						<div class="alert alert-danger alert-dismissible fade show " role="alert">
							<strong>Terjadi Kesalahan Saat Melakukan Input Data !!!</strong>
							<?= session()->getFlashdata('errors'); ?>
						</div>
					<?php endif; ?>

					<div class="form-group">
						<label>Nama Kategori</label>
						<input type="text" class="form-control" autocomplete="off" name="nama_kategori" value="<?= $kategori['nama_kategori']; ?>">
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">Simpan Data</button>
					<a href="<?= base_url('/kategori'); ?>" class="btn btn-secondary">Kembali</a>
				</div>
			</form>
		</div>
		<!-- /.card -->

	</div>
</section>

<?= $this->endSection(); ?>