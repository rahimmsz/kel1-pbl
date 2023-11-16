<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content">
	<div class="container-fluid">
		<a href="<?= base_url('/barang'); ?>" class="btn btn-dark mb-4">Kembali</a>
		<div class="card card-solid">
			<div class="card-body">
				<div class="row">
					<div class="col-12 col-sm-6">
						<div class="col-12">
							<img src="<?= base_url('/img_data' . '/' . $barang['gambar']); ?>" class="product-image" alt="Product Image">
						</div>
					</div>
					<div class="col-12 col-sm-6">
						<h3 class="my-3"><?= $barang['nama_barang']; ?></h3>
						<hr>
						<div class="col-sm-13 invoice-col">
							<b>Kategori : </b><?= $barang['nama_kategori']; ?><br>
							<br>
							<b>Ukuran : </b><?= $barang['ukuran']; ?><br>
							<b>Warna : </b><?= $barang['warna']; ?><br>
							<b>Jumlah : </b><?= $barang['jumlah']; ?><br>
							<b>Deskripsi : </b><?= $barang['deskripsi']; ?><br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection(); ?>