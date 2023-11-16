<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="content">
	<div class="container-fluid">
		<div class="card card-primary">
			<div class="card-body">
				<?php if (!empty(session()->getFlashdata('error'))) : ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Terjadi Kesalahan Saat Melakukan Input Data !!!</strong>
						<?= session()->getFlashdata('error'); ?>
					</div>
				<?php endif; ?>


				<form method="POST" action="<?= base_url('/user/simpan_user'); ?>" enctype="multipart/form-data">
					<?= csrf_field(); ?>
					<div class="form-row">
						<div class="col">
							<label class="col-form-label">Nama Lengkap </label>
							<input type="text" name="nama_lengkap" class="form-control" autocomplete="off" value="<?= old('nama_lengkap'); ?>">
						</div>

						<div class="col">
							<div class="custom-file">
								<label class="col-form-label">Foto Profil </label>
								<input type="file" class="form-control-file" name="foto_profil">
							</div>
						</div>
					</div>
					<div class="form-group ">
						<label for="Nama">Username : </label>
						<input type="text" name="username" class="form-control" autocomplete="off" value="<?= old('username'); ?>">
					</div>
					<div class="form-group ">
						<label for="Nama">Password : </label>
						<input type="password" name="password" class="form-control" autocomplete="off" value="<?= old('password'); ?>">
					</div>

					<div class="form-group ">
						<label for="select-roles">Roles : </label>
						<select name="role" class="form-control">
							<option value="">-- Pilih Role --</option>
							<option value="Owner">Owner</option>
							<option value="Karyawan">Karyawan</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Simpan Data</button>
					<a href="/user" class="btn btn-secondary"> Kembali </a>
				</form>
			</div>
		</div>
	</div>
</section>


<?= $this->endSection(); ?>