<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

<head>
	<?php $this->load->view("hendi_admin/_partials/head.php") ?>
</head>

<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <a class="my-0 mr-auto font-weight-normal" href="/">
        <img class="navbar-brand-dark common" src="/assets/img/logo.png" height="30" alt="Logo light">
      </a>
      <!-- <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Features</a>
        <a class="p-2 text-dark" href="#">Enterprise</a>
        <a class="p-2 text-dark" href="#">Support</a>
        <a class="p-2 text-dark" href="#">Pricing</a>
      </nav> -->
      
    </div>

<div class="row justify-content-center">

  <!-- {{-- column 1 --}} -->
  <div class="col-2 hidden-mobile ml-2">
      <!-- Sidebar -->
      <nav id="sidebar">
          <div class="sidebar-header">
              <h4>Dashboard</h4>
          </div>
          <?php if(isset($_SESSION["username"])){?>
            <a class="btn btn-primary mb-2" href="/Dashboard">Dashboard</a>
          <?php }?>


          <!-- <div class="sidebar-header">
              <h4>Pilihan Topik</h4>
          </div>

          <ul class="list-unstyled components list-group">
              <?php foreach ($categories as $category) : ?>
                <a href="/Dashboard?Category=<?php echo $category->slug ?>" class="list-group-item list-group-item-action border shadow-soft rounded mb-1 ">
                    <p class="text-dark text-decoration-none"><?php echo $category->name ?></p>
                </a>
              <?php endforeach?>
          </ul> -->

      </nav>

  </div>

  <!-- {{-- column 2 --}} -->
  <div class="column col-9">
    <h1 class="mb-3 text-center">Semua Forum</h1>
  
    <div class="container">
      <div class="row">
        <?php foreach ($posts as $post) : ?>
          <div class="container mb-2">
            <div class="card">
              <div class="card-body">
                <!-- Inisial -->
                <!-- <?php echo substr($post->nama ,0,1); ?> -->
                <div class="row mb-1">
                  <div class="col-1">
                  <img src="/assets/img/avatar.jpg" class="rounded-circle" style="width: 50px;" alt="Avatar" />
                  </div>
                  <div class="col-5">
                    <h5 class="card-title"><?php echo $post->nama ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"> Kategori : <?php echo $post->name ?></h6>
                  </div>
                </div>

                <h5 class="card-text"><?php echo $post->title ?></h5>
                <p class="card-text"><?php echo $post->body ?></p>
              </div>
            </div>
          </div>
          <?php endforeach?>
      </div>
    </div>

  </div>
</div>

   
</body>
</html>
