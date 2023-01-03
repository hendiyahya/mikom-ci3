<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Home</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/album/">

    

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/dist/css/bootstrap.min.css" rel="stylesheet">
    


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <!-- <link href="album.css" rel="stylesheet"> -->
  </head>
  <body>
    
<header>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom shadow-sm" style="background-color:#E0FFFF">
      <a class="my-0 mr-md-auto font-weight-normal" href="/">
        <img class="navbar-brand-dark common" src="<?= base_url(); ?>assets/img/logo.png"  height="30" alt="Logo light">
      </a>

      
      <a><?php echo ucfirst($this->session->userdata('username')); ?></a>

      <a href="/"><button type="button" class="btn btn-info ml-2 mr-2" >Landing Page</button></a>
      <a class="btn btn-info mr-2" href="<?= base_url(); ?>index.php/ade_controllers/Dashboard">Dashboard</a>
        <?php if(isset($_SESSION["username"])){?>

        <a class="btn btn-danger mx-2" href="/Login/Logout">Logout</a>
        <?php } ?>
     
       <!--   <?php if(isset($_SESSION["username"])){?>
        <a class="btn btn-danger mr-2" href="/Login/Logout">Logout</a>
      <?php } else {?>
        <a class="btn btn-primary" href="index.php/Login">Login</a>
      <?php } ?> -->

      
     
    </div>
</header>

<main role="main">

      

    <div class="container">
      <h2 style="text-align: center; margin-top: 50px;">Pengabdian Mahasiswa Pada Masyarakat </h2>
      <br><br>
    </div>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
      
        <?php foreach ($queryAllNgabdi as $post) : ?>
        <div class="col-md-4">
         
          <div class="card mb-4 shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="400" height="220" src="<?= base_url(); ?>assets/ade/img/<?php echo $post->Foto?>"> </img>
          
            <div class="card-body">
              <p class="card-text"><?php echo $post->Judul ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="<?php echo base_url(); ?>ade_controllers/edit_post/detail_post/<?php echo $post->ID ?>"><button class="btn btn-info">view</button></a>
                  <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                  <!-- <a href="<?php echo base_url('index.php/ade_controllers/edit_post/halaman_edit') ?>/<?php echo $post->ID ?>"><button >Edit</button></a>  -->
                </div>
                <small class="text-muted"><?php echo $post->Waktu  ?></small>
              </div>
            </div>
          </div>
         
        </div>
         <?php endforeach?>
      </div>
    </div>
  </div>

</main>

<footer class="text-muted">

</footer>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
