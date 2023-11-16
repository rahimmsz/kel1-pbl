<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="content">
	<div class="container-fluid">
		<!-- Button trigger modal -->
		<a href="/user/tambah_user" class="btn btn-success mb-3"><i class="fas fa-plus-circle mr-2"></i>
			Tambah Data
		</a>

		<?php if (session()->getFlashdata('pesan')) : ?>
			<div class="alert alert-success" role="alert">
				<?= session()->getFlashdata('pesan'); ?>
			</div>
		<?php endif; ?>

		<div class="table-responsive-sm">
			<table class="table table-sm">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama</th>
						<th scope="col">Username</th>
						<th scope="col">Role</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1 ?>
					<?php foreach ($user as $usr) : ?>
						<tr>
							<th><?= $no++; ?></th>
							<td><?= $usr['nama_lengkap']; ?></td>
							<td><?= $usr['username']; ?></td>
							<td><?= $usr['role']; ?></td>
							<td>
								<a href="" class="btn btn-warning"><i class="fas fa-edit"></i></a>
								<a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>

	</div>
</section>

<?= $this->endSection(); ?>