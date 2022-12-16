

<!doctype html>
<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- {{-- Bootstrap Icons --}} -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- {{-- My Style --}} -->
    <!-- <link rel="stylesheet" href="/css/style.css"> -->

    <title>Mikom UPI | {{ $title }}</title>
</head>

<body>

<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg headroom py-lg-2 px-lg-6 navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img class="navbar-brand-dark common" src="assets/img/logo.png" height="30" alt="Logo light">
            </a>
        </div>
    </nav>

    <div class="row justify-content-center mt-8">
      <div class="col-md-4">
        <h3><?php echo $message; ?></h3>

        <h5>Sekarang Anda Bisa Login</h5>
        <a class="btn btn-primary" href="/login">Login</a>
        
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
