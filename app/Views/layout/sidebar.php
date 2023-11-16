<div class="sidebar">

	<div class="user-panel mt-3 pb-3 mb-3 d-flex">
		<div class="image">
			<img src="<?= base_url('/img_profile/foto_default.png'); ?>" class="img-circle elevation-2" alt="User Image">
		</div>
		<div class="info">
			<a href="#" class="d-block"><?= session()->get('nama_lengkap'); ?></a>
		</div>
	</div>


	<nav class="mt-2" style="font-size:14px;">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			<!-- Add icons to the links using the .nav-icon class
			 with font-awesome or any other icon font library -->
			<li class="nav-item">
				<a href="<?= base_url('/dashboard'); ?>" class="nav-link">
					<i class="nav-icon fas fa-tachometer-alt"></i>
					<p>
						Dashboard
					</p>
				</a>
			</li>

			<hr style="width:100%;color:gray;background-color:gray">

			<li class="nav-item">
				<a href="#" class="nav-link active">
					<i class="nav-icon fas fa-file-alt"></i>
					<p>
						Data Master
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview" id="dropwdown">
					<li class="nav-item">
						<a href="<?= base_url('/barang'); ?>" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Barang</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('/supplier'); ?>" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Supplier</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('/kategori'); ?>" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Kategori</p>
						</a>
					</li>
				</ul>
			</li>

			<li class="nav-item">
				<a href="<?= base_url('/barang_masuk'); ?>" class="nav-link">
					<i class="fas fa-inbox nav-icon"></i>
					<p>Barang Masuk</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('/barang_keluar'); ?>" class="nav-link">
					<i class="nav-icon fas fa-sign-out-alt"></i>
					<p>Barang Keluar</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('barang/barang_habis'); ?>" class="nav-link">
					<i class="nav-icon fas fa-times-circle"></i>
					<p>Barang Habis</p>
				</a>
			</li>

			<hr style="width:100%;color:gray;background-color:gray">


			<li class="nav-item">
				<a href="<?= base_url('/transaksi'); ?>" class="nav-link">
					<i class="nav-icon fas fa-money-check-alt"></i>
					<p>Transaksi</p>
				</a>
			</li>


			<hr style="width:100%;color:gray;background-color:gray">

			<li class="nav-item">
				<a href="<?= base_url('/user'); ?>" class="nav-link">
					<i class="nav-icon fas fa-users-cog"></i>
					<p>Kelola User</p>
				</a>
			</li>

			<li class="nav-item">
				<a href="<?= base_url('/auth/logout'); ?>" class="nav-link">
					<i class="nav-icon fas fa-sign-out-alt"></i>
					<p>Logout</p>
				</a>
			</li>
		</ul>

		<hr style="width:100%;color:gray;background-color:gray">
	</nav>
</div>