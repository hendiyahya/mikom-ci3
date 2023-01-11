<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Landing Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <!-- <link href="assets/landing/img/apple-touch-icon.png" rel="apple-touch-icon"> -->


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/landing/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/landing/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/landing/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/landing/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/landing/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/landing/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Scaffold - v4.10.0
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <a class="my-0 mr-md-auto font-weight-normal" href="/">
          <img class="navbar-brand-dark common" src="<?php echo base_url('assets/img/logo.png') ?>" height="30" alt="Logo light">
        </a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/landing/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link" href="ade_controllers/beranda/index">Pengabdian</a></li>
          <li><a class="nav-link" href="alghi/Home">Penelitian</a></li>
          <li><a class="nav-link" href="arum/home">Kemahasiswaan</a></li>
          <li><a class="nav-link" href="makhi/home">Beasiswa</a></li>
          <li><a class="nav-link" href="hendi/Beranda/index">Forum</a></li>
          <?php if (isset($_SESSION["username"])) { ?>
            <li>
              <a class="nav-link" href="<?php echo base_url('/Login/logout') ?>">Logout</a>
            </li>
          <?php } else { ?>
            <li>
              <a class="nav-link" href="Login">Login</a>
            </li>
          <?php } ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
          <div>
            <h1>Portal Berita dan Forum Mahasiswa Ilmu Komputer</h1>
            <h2>Kami menyediakan berita terbaru mengenai berbagai topik dan forum komunikasi untuk mahasiswa ilmu komputer</h2>
            <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="fade-left">
          <img src="assets/landing/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-in">
            <img src="assets/landing/img/kita.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0">
              <h3>Tugas Proyek Keahlian</h3>
              <p class="fst-italic">
                Diampu oleh Bapak Herbert Siregar, M.T,
              </p>
              <ul>
                <li><i class="bi bi-check-circle"></i> Ade Ariyansyah / 1904442</li>
                <li><i class="bi bi-check-circle"></i> M. Ramadhan Alghifary / 1902265</li>
                <li><i class="bi bi-check-circle"></i> Nenden Citra S.N / 1908589</li>
                <li><i class="bi bi-check-circle"></i> Makhi Zainul U</li>
                <li><i class="bi bi-check-circle"></i> Hendi Yahya</li>
              </ul>
              <!-- <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate tera noden carma palorp mades tera.
              </p> -->
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item" data-aos="fade-up">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                  <h4>Kemahasiswaan</h4>
                  <p>Menyediakan informasi mengenai kegiatan dan artikel kemahasiswaan.</p>
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                  <h4>Penelitian</h4>
                  <p>Menyediakan informasi mengenai topik penelitian dari berbagai KBK.</p>
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="200">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                  <h4>Beasiswa</h4>
                  <p>Menyediakan informasi mengenai kesempatan beasiswa yang bisa diikuti.</p>
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="300">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                  <h4>Forum</h4>
                  <p>Menyediakan wadah untuk mahasiswa Depilkom bertanya dan bertukar pendapat mengenai sebuah topik.</p>
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="300">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-1">
                  <h4>Pengabdian</h4>
                  <p>Menyediakan informasi mengenai Pengabdian yang dilakukan Depilkom.</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  <img src="assets/landing/img/features-1.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-2">
                <figure>
                  <img src="assets/landing/img/features-2.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-3">
                <figure>
                  <img src="assets/landing/img/features-3.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-4">
                <figure>
                  <img src="assets/landing/img/features-4.png" alt="" class="img-fluid">
                </figure>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our Team</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row justify-content-center">

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
            <div class="icon-box icon-box-pink">
              <div class="icon">
                <img src="assets/landing/img/adeariyan.jpg" class="img-fluid" alt="">
              </div>
              <br>
              <h4 class="title"><a href="">Ade Ariyansyah</a></h4>
              <p class="description">IG : adearians_ </p>
              <p class="description">TTL : Tegal, 29/01/2001 </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon">
                <img src="assets/landing/img/Alghi.jpg" class="img-fluid" alt="">
              </div>
              <br>
              <h4 class="title"><a href="">M. Ramadhan Alghifary</a></h4>
              <p class="description">IG : arum.nenden </p>
              <p class="description">TTL : Bandung, 19/12/2001 </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon">
                <!-- <i class="bx bx-tachometer"></i> -->
                <img src="assets/landing/img/arum1.jpg" class="img-fluid" alt="">
              </div>
              <br>
              <h4 class="title"><a href="">Nenden Citra S.N</a></h4>
              <p class="description">IG : arum.nenden </p>
              <p class="description">TTL : Bandung, 19/12/2001 </p>
            </div>
          </div>



        </div>
        <br>
        <br>
        <!-- baris dua -->
        <div class="row justify-content-center">

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
            <div class="icon-box icon-box-pink">
              <div class="icon">
                <!-- <i class="bx bx-tachometer"></i> -->
                <img src="assets/landing/img/arum1.jpg" class="img-fluid" alt="">
              </div>
              <br>
              <h4 class="title"><a href="">Makhi Zainul U</a></h4>
              <p class="description">IG : arum.nenden </p>
              <p class="description">TTL : Bandung, 19/12/2001 </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon">
                <!-- <i class="bx bx-tachometer"></i> -->
                <img src="assets/landing/img/hendi.jpg" class="img-fluid" alt="">
              </div>
              <br>
              <h4 class="title"><a href="">Hendi Yahya</a></h4>
              <p class="description">IG : hendiyahya </p>
              <p class="description">TTL : Garut, 20/08/2000 </p>

            </div>
          </div>




        </div>

      </div>
    </section><!-- End Services Section -->



    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Clients</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo" data-aos="zoom-in">
              <img src="assets/landing/img/clients/client-1.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/landing/img/clients/client-2.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo" data-aos="zoom-in" data-aos-delay="150">
              <img src="assets/landing/img/clients/client-3.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/landing/img/clients/client-4.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo" data-aos="zoom-in" data-aos-delay="250">
              <img src="assets/landing/img/clients/client-5.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo" data-aos="zoom-in" data-aos-delay="300">
              <img src="assets/landing/img/clients/client-6.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo" data-aos="zoom-in" data-aos-delay="350">
              <img src="assets/landing/img/clients/client-7.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="client-logo">
              <img src="assets/landing/img/clients/client-8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>
    </section>End Clients Section -->

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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/landing/vendor/aos/aos.js"></script>
  <script src="assets/landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/landing/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/landing/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/landing/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/landing/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/landing/js/main.js"></script>

</body>

</html>