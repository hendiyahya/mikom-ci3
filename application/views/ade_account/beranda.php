<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Home</title>

    <!-- Bootstrap core CSS -->

    <link href="<?= base_url(); ?>assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/ade/css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/ade/css/style.css">
   <link href="<?= base_url(); ?>assets/landing/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/landing/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/landing/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/landing/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/landing/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/landing/css/style.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/img/favicon.png" rel="icon">
  

    
   <style>
   
   </style>
    <!-- Custom styles for this template -->
    <!-- <link href="album.css" rel="stylesheet"> -->
  </head>
  <body>
    
<header>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4  border-bottom shadow-sm" style="background-color:#E0FFFF">
      <a class="my-0 mr-md-auto font-weight-normal" href="/">
        <img class="navbar-brand-dark common" src="<?= base_url(); ?>assets/img/logo.png"  height="30" alt="Logo light">
      </a>
      <!-- <div class="row">
              <div class="col">
                <input type="text" name="keyword" class="form-control" placeholder="search">
              </div>
              <div class="col">
                <span><button type="submit" class="btn btn-success">Cari</button></span>
              </div>
            </div> -->

      
      <a><?php echo ucfirst($this->session->userdata('username')); ?></a>
    

      <a class="btn btn-info ml-3" href="<?= base_url(); ?>index.php/ade_controllers/Dashboard">Dashboard</a>
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

    <section class="header_section mb-5">
      <!-- banner section start -->
      <div class="about0_section layout_padding">
         <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <<h2 style="text-align: center; margin-top: -30px;color:white; font-size:40px"><b>Pengabdian Mahasiswa Pada Masyarakat</b>  </h2>
                     <br><br>
                     <p class="banner_text">Pengabdian pada masyarakat atau disingkat P2M, merupakan kegiatan yang dilakukan 
                      sebagai implementasi salah satu pilar dari Tri Dharma Perguruan Tinggi. P2M ini merupakan upaya pengembangan masyarakat kearah yang lebih
                       baik dengan melakukan beberapa perbaikan dan perubahan melalui pendidikan, penelitian, dan donasi demi 
                       terwujudnya masyarakat yang maju, tentram, dan harmonis.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      </section>


  <div class=" py-2 bg-light">
    <div class="container">

      <div class="row">
      
        <?php foreach ($pagination as $post) : ?>
        <div class="col-md-4 mb-4">
         
          <div class="card shadow">
            <img style="width: 400px; height: 220px" src="<?= base_url(); ?>assets/ade/img/<?php echo $post['Foto']?>"> </img>
          
            <div class="card-body">
              <p class="card-text "><?php echo $post['Judul'] ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="<?php echo base_url(); ?>ade_controllers/detail_post/fungsi_detail/<?php echo $post['ID'] ?>"><button class="btn btn-info">view</button></a>
        
                </div>
                <small class="text-muted"><?php echo $post['Waktu'] ?></small>
              </div>
            </div>
          </div>
         
        </div>
         <?php endforeach?>
         <?= $this->pagination->create_links(); ?>
      </div>
    </div>
  </div>

</main>

<footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-6">
        <div class="footer-info">
          <h3>Mikom</h3>
          <p>
            Universitas Pendidikan Indonesia <br>
            Jl. Dr. Setiabudhi No. 229 Bandung <br><br>
            <strong>Phone:</strong> 022-2013163<br>
            <strong>Email:</strong> sekuniv_upi@upi.edu<br>
          </p>
          <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="https://www.upi.edu/" target="_blank">UPI</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="https://cs.upi.edu/v2/" target="_blank">CS UPI</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="https://spada.upi.edu/" target="_blank">SPADA</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="https://student.upi.edu/" target="_blank">SIAK</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="https://spot.upi.edu/" target="_blank">SPOT</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Navigation</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>ade_controllers/beranda/index">Pengabdian</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>alghi/Home">Penelitian</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>arum/home">Kemahasiswaan</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>makhi/home">Beasiswa</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>hendi/Beranda/index">Forum</a></li>
        </ul>
      </div>

      <!-- <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Our Newsletter</h4>
        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>

      </div> -->

    </div>
  </div>
</div>

</footer><!-- End Footer -->
  </body>
</html>
