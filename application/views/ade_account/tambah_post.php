<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Tambah Data</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/checkout/">

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <link href="<?= base_url(); ?>assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/ade/css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/ade/css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="<?= base_url(); ?>assets/ade/css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="<?= base_url(); ?>assets/ade/images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="<?= base_url(); ?>assets/ade/css/owl.carousel.min.css">
   <link rel="stylesheet" href="<?= base_url(); ?>assets/ade/css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">

    

    <!-- Bootstrap core CSS -->
    <link href="../../../assets/dist/css/bootstrap.min.css" rel="stylesheet">



    <style>

       trix-toolbar [data-trix-button-group="file-tools"]{
        display:none;
      }

      .container {
        max-width: 960px;
      }

      .lh-condensed { line-height: 1.25; }
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
    <link href="../../../assets/css/form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom shadow-sm" style="background-color:#E0FFFF">
      <a class="my-0 mr-md-auto font-weight-normal" href="/">
        <img class="navbar-brand-dark common" src="<?= base_url(); ?>assets/img/logo.png"  height="30" alt="Logo light">
      </a>
      <a class="btn btn-info mr-3" href="<?= base_url(); ?>index.php/ade_controllers/Dashboard">Dashboard</a>
      <!-- <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Features</a>
        <a class="p-2 text-dark" href="#">Enterprise</a>
        <a class="p-2 text-dark" href="#">Support</a>
        <a class="p-2 text-dark" href="#">Pricing</a>
      </nav> -->
  
    </div>  

<div class="container">
  <div class="py-5 text-center">
    <!-- <img class="d-block mx-auto mb-4" src="../../../assets/brand/bootstrap-solid.svg"  src="<?= base_url(); ?>a" width="72" height="72"> -->
    <h2>Halaman Tambah Artikel Pengabdian Pada Masyarakat</h2>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      
    </div>
    <div class="col-md-12 order-md-1">
      
      <!-- <?php echo form_open_multipart('ade_controllers/tambah_post/fungsiTambah');?> -->
      <form action="<?= base_url(); ?>ade_controllers/tambah_post/fungsiTambah" method="post" enctype="multipart/form-data">
      <!-- <form action="<?php echo base_url('index.php/ade_controllers/tambah_post/fungsiTambah') ?>" method="post" class="needs-validation" novalidate> -->
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="Judul"><b>Judul</b></label>
            <input type="text" class="form-control" name="Judul" placeholder="Masukkan Judul" required>
          </div>
        </div>  

        <div class="mb-3">
          <label for="Waktu"><b>Waktu</b></label>
          <input type="Date" class="form-control" name="Waktu"  required>
        </div>

        <div>
          <label><b>Caption</b></label>
          <input id="Caption" type="hidden" name="Caption" required>
          <trix-editor input="Caption"></trix-editor>
        </div>
        <div class="mb-3">   
          <label for="foto"><b>Foto</b> </label>
           <input type="file" class="form-control" id="preview_gambar" name="gambar" size="20" required>
        </div>


        <!-- <div class="mb-3">
          <label for="Caption">Caption</label>
          <input type="text" class="form-control" name="Caption" placeholder="Masukkan Caption">
        </div> -->

        <button class="btn mt-5 btn-primary btn-lg btn-block" type="submit">Tambah Berita Artikel</button>
      </form>
    </div>
  </div>
</div>

</body>
</html>
