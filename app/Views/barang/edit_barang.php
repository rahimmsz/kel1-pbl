<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="content">
	<div class="container-fluid">

		<?php if (!empty(session()->getFlashdata('errors'))) : ?>
			<div class="alert alert-danger alert-dismissible fade show " role="alert">
				<strong>Terjadi Kesalahan Saat Melakukan Input Data !!!</strong>
				<?= session()->getFlashdata('errors'); ?>
			</div>
		<?php endif; ?>

		<form method="POST" action="<?= base_url('/barang/update' . '/' . $barang['id_barang']); ?>" enctype="multipart/form-data">
			<?= csrf_field(); ?>

			<div class="form-row">
				<div class="col">
					<label class="col-form-label">Nama Barang </label>
					<input type="text" name="nama_barang" class="form-control" autocomplete="off" value="<?= $barang['nama_barang']; ?>">
				</div>

				<div class="col">
					<label class="col-form-label">Kategori </label>
					<select name="id_kategori" class="form-control">
						<option value="">-- Pilih Kategori --</option>
						<?php foreach ($kategori as $ktg) : ?>
							<option value="<?= $ktg['id_kategori']; ?>"><?= $ktg['nama_kategori']; ?></option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>

			<div class="form-group mt-3">
				<div class="custom-file">
					<label class="col-form-label">Gambar </label>
					<input type="file" class="form-control-file" name="gambar" value="<?= $barang['gambar'] ?>">
				</div>
			</div>


			<div class="form-row">
				<div class="col">
					<label class="col-form-label">Ukuran </label>
					<input type="number" name="ukuran" class="form-control" min=0 autocomplete="off" value="<?= $barang['ukuran'] ?>">
				</div>

				<div class="col">
					<label class="col-form-label">Warna </label>
					<input type="text" name="warna" class="form-control" autocomplete="off" value="<?= $barang['warna'] ?>">
				</div>

				<div class="col">
					<label class="col-form-label">Jumlah </label>
					<input type="number" name="jumlah" class="form-control" autocomplete="off" value="<?= $barang['jumlah'] ?>">
				</div>
			</div>

			<div class="form-row mt-3 mb-3">
				<label class="col-form-label">Deskripsi </label>
				<div class="col-sm-12">
					<textarea class="form-control" rows="3" name="deskripsi"></textarea>
				</div>
			</div>

			<button type="submit" class="btn btn-primary">Simpan Data</button>
			<a href="/barang" class="btn btn-secondary">Kembali</a>
		</form>


	</div>
</section>

<?= $this->endSection(); ?>