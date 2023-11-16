<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="content">
	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-3 col-6">
				<div class="small-box bg-warning">
					<div class="inner">
						<h3><?= $countBarang; ?></h3>
						<p>Barang</p>
					</div>
					<div class="icon">
						<i class="fas fa-box"></i>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-6">
				<div class="small-box bg-dark">
					<div class="inner">
						<h3><?= $countKategori; ?></h3>
						<p>Kategori</p>
					</div>
					<div class="icon">
						<i class="fas fa-tags"></i>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-6">
				<div class="small-box bg-info">
					<div class="inner">
						<h3>150</h3>
						<p>Barang Habis</p>
					</div>
					<div class="icon">
						<i class="fas fa-times-circle"></i>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-6">
				<div class="small-box bg-info">
					<div class="inner">
						<h3>150</h3>
						<p>Barang Habis</p>
					</div>
					<div class="icon">
						<i class="fas fa-times-circle"></i>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-6">
				<div class="small-box bg-info">
					<div class="inner">
						<h3>150</h3>
						<p>New Orders</p>
					</div>
					<div class="icon">
						<i class="fas fa-shopping-cart"></i>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>


<?= $this->endSection(); ?>