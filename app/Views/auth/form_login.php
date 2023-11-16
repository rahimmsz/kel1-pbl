<!DOCTYPE html>
<html>

<head>
	<title>Login-Footwear</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/login.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<img class="wave" src="<?= base_url(); ?>/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/pngegg.png">
		</div>
		<div class="login-content">
			<form action="<?= base_url('/auth/login'); ?>" method="POST">
				<?= csrf_field(); ?>
				<img src="<?= base_url(); ?>/img/avatar.svg">
				<h2 class="title">Welcome</h2>

				<?php if (!empty(session()->getFlashdata('error'))) : ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<?= session()->getFlashdata('error'); ?>
					</div>
				<?php endif; ?>

				<?php if (session()->getFlashdata('logout')) : ?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<?= session()->getFlashdata('logout'); ?>
					</div>
				<?php endif; ?>

				<?php if (!empty(session()->getFlashdata('errors'))) : ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<?= session()->getFlashdata('errors'); ?>
					</div>
				<?php endif; ?>

				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>Username</h5>
						<input type="text" class="input" name="username" autocomplete="off">
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>Password</h5>
						<input type="password" class="input" name="password" autocomplete="off">
					</div>
				</div>
				<input type="submit" class="btn" value="Login">
			</form>
		</div>
	</div>
	<script>
		const inputs = document.querySelectorAll(".input");

		function addcl() {
			let parent = this.parentNode.parentNode;
			parent.classList.add("focus");
		}

		function remcl() {
			let parent = this.parentNode.parentNode;
			if (this.value == "") {
				parent.classList.remove("focus");
			}
		}

		inputs.forEach(input => {
			input.addEventListener("focus", addcl);
			input.addEventListener("blur", remcl);
		});
	</script>
</body>

</html>