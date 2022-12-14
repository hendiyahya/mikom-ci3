<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("hendi_admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("hendi_admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("hendi_admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid my-4">

				<?php $this->load->view("hendi_admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('Dashboard/index') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('hendi/Hendi_PostController/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group mb-4">
								<label for="title">title*</label>
								<input class="form-control <?php echo form_error('title') ? 'is-invalid':'' ?>"
								 type="text" name="title" placeholder="post title" />
								<div class="invalid-feedback">
									<?php echo form_error('title') ?>
								</div>
							</div>



							<div class="form-group mb-4">
								<label for="title">body*</label>
								<textarea class="form-control <?php echo form_error('body') ? 'is-invalid':'' ?>"
								 name="body" placeholder="post body..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('body') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("hendi_admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("hendi_admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("hendi_admin/_partials/js.php") ?>

</body>

</html>