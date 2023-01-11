<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forum MIKOM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/hendi/img/favicon.png" rel="icon">
  <link href="/assets/hendi/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/hendi/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/hendi/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/hendi/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/hendi/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/hendi/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/hendi/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/hendi/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/hendi/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OnePage - v4.10.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="bghero">



  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="/" class="logo"><img src="<?php echo base_url('assets/img/logo.png')?>" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <?php if(isset($_SESSION["username"])){?>
            <li><a class="nav-link">Halo, <?php echo ucfirst($this->session->userdata('username')); ?></a></li>
            <li><a class="getstarted mx-2" href="/hendi/Hendi_PostController">Dashboard</a></li>
            <li><a class="getstarted bg-danger mx-0" href="/Login/Logout">Logout</a></li>
            <?php } ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
 

  <main id="main">

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Forum</h2>
      <ol>
        <li><a href="/">Landing</a></li>
        <li>Forum</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<section class="inner-page pb-4 pt-0">
  <div class="container bghero">
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
        <div class="text-center">
          <h3>Forum</h3>
          <p> 
          Menyediakan wadah untuk mahasiswa Depilkom bertanya dan bertukar pendapat mengenai sebuah topik
        </p>
          <!-- <a class="cta-btn" href="#">Call To Action</a> -->
        </div>
      </div>
    </section><!-- End Cta Section -->
  </div>
  
</section>

<div class="flex row justify-content-center">



  <!-- {{-- column 2 --}} -->
  <div class="col-8">
    <h4 class="mb-3">Semua Forum</h4>
  
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
                <!-- post id <?php echo $post->id;?> -->
                <div class="row">
                  <div class="col-md-8">
                    <hr />
                    <h5>Komentar</h5>
                    <?php foreach ($comments as $comment) : ?>
                      
                      <?php if($comment->post_id == $post->id):?>
                        <!-- komen post id <?php echo $comment->post_id;?>
                        komen post id <?php echo $post->id;?> -->
                      <div class="card mb-2">
                        <div class="card-header">
                        <p><?php echo $comment->nama ?></p>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><?php echo $comment->body ?></p>
                        </div>
                      </div>
                      <?php endif;?>
                    <?php endforeach ?>
                    <h5>Kirim Komentar</h5>
                    <form action="<?php echo site_url('hendi/CommentController/add') ?>" method="post" enctype="multipart/form-data" >
                        <div class="form-group mb-2">
                            <input type="hidden" name="post_id" value="<?php echo $post->id ?>" />
                        </div>
                        <div class="form-group mb-4">
                          <textarea class="form-control <?php echo form_error('body') ? 'is-invalid':'' ?>"
                          name="body" placeholder="Isi komentar disini"></textarea>
                          <div class="invalid-feedback">
                            <?php echo form_error('body') ?>
                          </div>
                        </div>

                      <input class="btn btn-success" type="submit" name="btn" value="Tambah" />
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach?>
      </div>
    </div>

  </div>

    <!-- {{-- column 1 --}} -->
    <div class="col-2 hidden-mobile ml-2">
      <!-- Sidebar -->
      <nav id="sidebar">
          <div class="sidebar-header">
              <h4>Kategori</h4>
          </div>
          <?php if(isset($_SESSION["username"])){?>
            <small><a class="btn btn-outline-primary mb-2">Akademik</a></small>
            <small><a class="btn btn-outline-primary mb-2">Administrasi</a></small>
            <small><a class="btn btn-outline-primary mb-2">Organisasi</a></small>
            <small><a class="btn btn-outline-primary mb-2">Birokrasi</a></small>
            <small><a class="btn btn-outline-primary mb-2">Teknologi</a></small>
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
</div>

</main><!-- End #main -->

  <!-- ======= Footer ======= -->
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
              <li><i class="bx bx-chevron-right"></i> <a href="ade_controllers/beranda/index">Pengabdian</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="alghi/Home">Penelitian</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="arum/home">Kemahasiswaan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="makhi/home">Beasiswa</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="hendi/Beranda/index">Forum</a></li>
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

    <!-- <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Scaffold</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div> -->
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/hendi/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets/hendi/vendor/aos/aos.js"></script>
  <script src="/assets/hendi/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/hendi/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/hendi/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/hendi/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/hendi/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/hendi/js/main.js"></script>

</body>

</html>