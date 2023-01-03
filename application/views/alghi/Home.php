<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>MIKOM</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/alghi/dist/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="assets/alghi/Home.css" rel="stylesheet">
  </head>

  <body>

    <div class="container pt-2">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="my-0 mr-auto font-weight-normal col-9" href="/">
        <img class="navbar-brand-dark common" src="<?php echo base_url('assets/img/logo.png')?>" height="30" alt="Logo light" href="<?php echo base_url('Landing')?>">
      </a>
            <!-- <a class="text-muted" href="<?php echo base_url('Landing')?>">MIKOM</a> -->
          </div>
          <div class="navbar-form col-4" >
            <?php echo form_open('alghi/home/search')?>
              <input type="text" name="keyword" class="form-control" placeholder="search">
              <button type="submit" class="btn btn-success">Cari</button>
            <?php echo form_close() ?>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <!-- <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a> -->
            <?php if(isset($_SESSION["username"])){?>
              <a>Halo, <?php echo ucfirst($this->session->userdata('username')); ?></a>
              <a class="btn btn-danger mx-4" href="<?php echo base_url('/Login/logout')?>">Logout</a>
            <?php } ?>

            <!-- <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a> -->
          </div>
        </div>
      </header>

      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="text-center">
          <h1 class="display-4 font-italic tex">Referensi Topik Penelitian</h1>
          <p class="lead my-3">Halaman ini berisi informasi-informasi tentang topik-topik penelitian dari berbagai Kelompok Bidang Keahlian (KBK)</p>
          <p class="btn btn-primary"><a href="Dashboard" class="text-white font-weight-bold" >Dashboard</a></p>
        </div>
      </div>

      <div class="row mb-2">
         <?php foreach ($posts as $post) : ?>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow">
            <div class="card-body d-flex flex-column align-items-start">
              <h5 class="mb-0">
                <a class="text-dark"><?php echo $post->Judul ?></a>
              </h5>
              <div class="mb-1 text-muted"><?php echo $post->Kategori ?></div>
              <p class="card-text mb-auto"><?php echo substr($post->Isi,0,100);?>....</p>
              <a href="<?php echo base_url('/alghi/Dashboard/detail/')?><?php echo $post->id_posts ?>" >Baca Selengkapnya...</a>
            </div>
          </div>        
        </div>
        <?php endforeach; ?>
      </div>
    <!--   <div class="row">
        <div class="col">
          <?php echo $pagination; ?>
        </div>
      </div> -->
    </div>
    <footer class="text-center" style="background-color: rgba(0, 0, 0, 0.2);">
    </div>
      <p>Copyright 2022</p>
    </footer>
  </body>
</html>