

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

			<div class="container-fluid">

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('/hendi/Hendi_PostController') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/hendi_admin/posts/edit/ID --->

							<input type="hidden" name="id" value="<?php echo $post['id'] ?>" />
							<input type="hidden" name="category_id" value="<?php echo $post['category_id'] ?>" />
							<input type="hidden" name="user_id" value="<?php echo $post['user_id'] ?>" />

							<div class="form-group">
								<label for="title">Name*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="title" placeholder="post name" value="<?php echo $post['title'] ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="exampleFormControlSelect1">Kategori*</label>
								<select class="form-control" id="exampleFormControlSelect1" name="category_id">
								<?php foreach ($categories as $category): ?>
								<option value="<?php echo $category->id ?>" <?php echo ($category->id == $post['category_id']) ? "selected" : ''; ?> ><?php echo $category->name ?></option>
								<?php endforeach ?>
								</select>
								<div class="invalid-feedback">
									<?php echo form_error('body') ?>
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