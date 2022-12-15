

<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("hendi_admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<div id="wrapper">


		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("hendi_admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('Dashboard/index') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/hendi_admin/posts/edit/ID --->

							<input type="text" name="id" value="<?php echo $post['id'] ?>" />
							<input type="text" name="category_id" value="<?php echo $post['category_id'] ?>" />
							<input type="text" name="user_id" value="<?php echo $post['user_id'] ?>" />

							<div class="form-group">
								<label for="title">Name*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="title" placeholder="post name" value="<?php echo $post['title'] ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="title">body*</label>
								<textarea class="form-control <?php echo form_error('body') ? 'is-invalid':'' ?>"
								 name="body" placeholder="post body..."><?php echo $post['body'] ?></textarea>
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

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


</body>

</html>