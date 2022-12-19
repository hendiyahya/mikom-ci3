<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/dist/img/logo.png">

    <title>Landing Page</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/pricing.css" rel="stylesheet">
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <a class="my-0 mr-md-auto font-weight-normal" href="/">
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
      <?php } else {?>
        <a class="btn btn-primary" href="/Login">Login</a>
      <?php } ?>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h3>Media Informasi dan Komunikasi Ilmu Komputer</h3>
      <p class="lead">Dibangun sebagai Tugas Besar Proyek Keahlian</p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h5 class="my-0 font-weight-normal">Ade Ariyansyah</h5>
          </div>
          <div class="card-body">
            <h3 class="card-title pricing-card-title">Pengabdian </h3>
            <p>Menyediakan informasi mengenai Pengabdian yang dilakukan Depilkom</p>
            <button type="button" class="btn btn-lg btn-block btn-primary">Lihat</button>
          </div>
        </div>

        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h5 class="my-0 font-weight-normal">M. Ramadan Alghifary</h5>
          </div>
          <div class="card-body">
            <h3 class="card-title pricing-card-title">Penelitian</h3>
            <p>Menyediakan informasi mengenai topik penelitian dari berbagai KBK</p>
            <button type="button" class="btn btn-lg btn-block btn-primary">Lihat</button>
          </div>
        </div>

        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h5 class="my-0 font-weight-normal">Nenden Citra S.N</h5>
          </div>
          <div class="card-body">
            <h3 class="card-title pricing-card-title">Kemahasiswaan</h3>
            <p>Menyediakan informasi mengenai kegiatan dan artikel kemahasiswaan</p>
            <button type="button" class="btn btn-lg btn-block btn-primary">Lihat</button>
          </div>
        </div>

        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h5 class="my-0 font-weight-normal">Makhi Zainul U</h5>
          </div>
          <div class="card-body">
            <h3 class="card-title pricing-card-title">Beasiswa</h3>
            <p>Menyediakan informasi mengenai kesempatan beasiswa yang bisa diikuti</p>
            <button type="button" class="btn btn-lg btn-block btn-primary">Lihat</button>
          </div>
        </div>

        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h5 class="my-0 font-weight-normal">Hendi Yahya</h5>
          </div>
          <div class="card-body">
            <h3 class="card-title pricing-card-title">Forum</h3>
            <p>Menyediakan wadah untuk mahasiswa Depilkom bertanya dan bertukar pendapat mengenai sebuah topik.</p>
            <a href="hendi/Beranda/index" type="button" class="btn btn-lg btn-block btn-primary">Lihat</a>
          </div>
        </div>
      </div>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          
          <div class="col-12 col-md">
            <a href="/">
              <img class="navbar-brand-dark common" src="/assets/img/logo.png" height="30" alt="Logo light">
            </a>
            <small class="d-block mb-3 text-muted">&copy; 2022</small>
          </div>
          <div class="col-6 col-md">
            <h5>Tautan Penting</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">UPI</a></li>
              <li><a class="text-muted" href="#">FPMIPA</a></li>
              <li><a class="text-muted" href="#">CS UPI</a></li>
              <li><a class="text-muted" href="#">SIAK</a></li>
              <li><a class="text-muted" href="#">SPOT</a></li>
              <li><a class="text-muted" href="#">SPADA</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Tautan Penting</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">UPI</a></li>
              <li><a class="text-muted" href="#">FPMIPA</a></li>
              <li><a class="text-muted" href="#">CS UPI</a></li>
              <li><a class="text-muted" href="#">SIAK</a></li>
              <li><a class="text-muted" href="#">SPOT</a></li>
              <li><a class="text-muted" href="#">SPADA</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Tautan Penting</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">UPI</a></li>
              <li><a class="text-muted" href="#">FPMIPA</a></li>
              <li><a class="text-muted" href="#">CS UPI</a></li>
              <li><a class="text-muted" href="#">SIAK</a></li>
              <li><a class="text-muted" href="#">SPOT</a></li>
              <li><a class="text-muted" href="#">SPADA</a></li>
            </ul>
          </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
