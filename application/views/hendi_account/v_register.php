

<!doctype html>
<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- {{-- Bootstrap Icons --}} -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- {{-- My Style --}} -->
    <!-- <link rel="stylesheet" href="/css/style.css"> -->

    <title>Mikom UPI | Register</title>
</head>

<body>

<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg headroom py-lg-2 px-lg-6 navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img class="navbar-brand-dark common" src="assets/img/logo.png" height="30" alt="Logo light">
            </a>
        </div>
    </nav>

    <div class="row justify-content-center mt-8">
		<div class="col-md-4">
			<h1 class="h3 my-3 fw-normal text-center">Selamat Datang</h1>
			<?php
			// Cetak jika ada notifikasi
			if($this->session->flashdata('sukses')) {
			echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
			}
			?>

			<?php echo form_open('register');?>
			<div class="form-floating mb-2">
				<input type="text" name="name" class="form-control" id="email" value="<?php echo set_value('name'); ?>" placeholder="name" autofocus required>
				<label for="name">Nama</label>
				<?php echo form_error('name'); ?>
			</div>

			<div class="form-floating mb-2">
				<input type="text" name="username" class="form-control" id="email" value="<?php echo set_value('username'); ?>" placeholder="username" autofocus required>
				<label for="username">Username</label>
				<?php echo form_error('username'); ?>
			</div>

			<div class="form-floating mb-2">
				<input type="text" name="email" class="form-control" id="email" value="<?php echo set_value('email'); ?>" placeholder="email" autofocus required>
				<label for="email">Email</label>
				<?php echo form_error('email'); ?>
			</div>

			<div class="form-floating mb-2">
				<input type="password" name="password" class="form-control" id="email" value="<?php echo set_value('password'); ?>" placeholder="password" autofocus required>
				<label for="password">Password</label>
				<?php echo form_error('password'); ?>
			</div>

			<div class="form-floating mb-2">
				<input type="password" name="password_conf" class="form-control" id="email" value="<?php echo set_value('password_conf'); ?>" placeholder="password_conf" autofocus required>
				<label for="password_conf">Konfirmasi Password</label>
				<?php echo form_error('password_conf'); ?>
			</div>


			<button class="w-100 btn btn-lg btn-primary" type="submit" name="btnSubmit" value="Daftar" >Daftar</button>

			<?php echo form_close();?>

			<p class="text-center my-3">Sudah Memiliki Akun ? <a href="<?php echo base_url('Login')?>">Login</a></p>

			<!-- <p>Kembali ke beranda, Silakan klik <?php echo anchor(site_url().'/beranda','di sini..'); ?></p> -->
		</div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>

