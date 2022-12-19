<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>  
<head>
	<?php $this->load->view("hendi_account/_partials/head.php") ?>
</head>
<body>
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
<body id="page-top">


<div id="wrapper">
  <div class="row justify-content-center text-center my-4">
    <h2>Selamat Datang <a class="text-primary"><?php echo ucfirst($this->session->userdata('username')); ?></a></h3>
    <h5>Di Halaman Pengelolaan Post</h4>
  </div>
  
  <?php if ($this->session->flashdata('success2')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success2'); ?>
				</div>
				<?php endif; ?>
  
  <div class="container-fluid">
    <!-- DataTables -->
    <div class="card mb-3">
      <div class="card-header">
      
        <a href="<?php echo site_url('hendi/Hendi_PostController/add') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Post Baru</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <!-- <th>Kategori</th> -->
                <th>Judul</th>
                <th>Kategori</th>
                <th>Konten</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach ($posts as $post): ?>
              <tr>
                
                <td>
                  <?php echo $post['title']  ?>
                </td>
                <td>
                  <?php foreach ($categories as $category): ?>
                    <?php if($post['category_id'] == $category->id): ?>
                      <?php echo $category->name ?>
                    <?php endif ?>
                  <?php endforeach?>
                </td>
                <td class="small">
                  <?php echo $post['body'] ?></td>
                <td width="250">

                  <a href="<?php echo site_url('hendi/Hendi_PostController/edit/'.$post["id"]) ?>"
                  class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                  <a href="<?php echo site_url('hendi/Hendi_PostController/delete/'.$post["id"]) ?>"
                  href="#!" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                </td>
              </tr>
              <?php endforeach; ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>
</html>
