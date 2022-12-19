<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("hendi_admin/_partials/head.php") ?>
</head>

<body id="page-top">
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <a class="col-10 my-0 mr-4 font-weight-normal" href="/">
        <img class="navbar-brand-dark common" src="/assets/img/logo.png" height="30" alt="Logo light">
      </a>
      <!-- <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Features</a>
        <a class="p-2 text-dark" href="#">Enterprise</a>
        <a class="p-2 text-dark" href="#">Support</a>
        <a class="p-2 text-dark" href="#">Pricing</a>
      </nav> -->
      <?php if(isset($_SESSION["username"])){?>
        <a class="btn btn-danger mr-2" href="/Login/Logout">Logout</a>
        <!-- <a class="btn btn-primary" href="/Login">Dashboard</a> -->
      <?php } ?>
      
    </div>

	<div id="wrapper">


		<div id="content-wrapper">

			<div class="col-8 my-4 mx-auto">
				<h2>Tambah Data Baru</h2>

				<?php $this->load->view("hendi_admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a class="btn btn-primary" href="<?php echo site_url('/hendi/Hendi_PostController') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('hendi/Hendi_PostController/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group mb-4">
								<label for="title">Judul*</label>
								<input class="form-control <?php echo form_error('title') ? 'is-invalid':'' ?>"
								 type="text" name="title" placeholder="post title" />
								<div class="invalid-feedback">
									<?php echo form_error('title') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="exampleFormControlSelect1">Kategori*</label>
								<select class="form-control" id="exampleFormControlSelect1" name="category_id">
								<?php foreach ($categories as $category): ?>
								<option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
								<?php endforeach ?>
								</select>
								<div class="invalid-feedback">
									<?php echo form_error('body') ?>
								</div>
							</div>

							<div class="form-group mb-4">
								<label for="title">Konten*</label>
								<textarea class="form-control <?php echo form_error('body') ? 'is-invalid':'' ?>"
								 name="body" placeholder="post body..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('body') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Tambah" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->




</body>

</html>