<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">
  <head>

  <?php $this->load->view("alghi/partials/head.php") ?>

    <title>MIKOM</title>    

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="assets/alghi/Home.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1"> 
            <img class="navbar-brand-dark common" src="<?php echo base_url('assets/img/logo.png')?>" height="30" alt="Logo light">
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <!-- <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg> -->
            </a>
            <?php if(isset($_SESSION["username"])){?>
              <a>Halo, <?php echo ucfirst($this->session->userdata('username')); ?></a>
              <a class="btn btn-danger mx-4" href="<?php echo base_url('/Login/logout')?>">Logout</a>
            <?php } ?><!-- 
            <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a> -->
          </div>
        </div>
      </header>

      <div class="row mb-2">
         
        <div class="col">
          <div class="card flex-md-row mb-4 box-shadow">
            <div class="card-body d-flex flex-column align-items-start">
              <h3 class="mb-0 text-center">
                <a class="text-dark"><?php echo $post['Judul'] ?></a>
              </h3>
              <br>
              <div class="m-auto text-muted">
                <p class="text-center"><?php echo $post['Kategori'] ?></p></div>
                <p class="card-text mb-auto"><?php echo $post['Isi'] ?></p>
            </div>
          </div>        
        </div>
      </div>
    </div>
    
    <footer class="text-center">
      <p>Copyright 2022</p>
      <p>
        <a href="<?php echo base_url('alghi/Home')?>">Kembali</a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>