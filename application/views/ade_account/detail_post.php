
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Home</title>
	<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <link href="<?= base_url(); ?>assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/ade/css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/ade/css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="<?= base_url(); ?>assets/ade/css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="<?= base_url(); ?>assets/ade/images/fevicon.png" type="image/gif" />

</head>
<body>
   <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom shadow-sm" style="background-color:#E0FFFF">
      <a class="my-0 mr-md-auto font-weight-normal" href="../../../../index.php">
        <img class="navbar-brand-dark common" src="<?= base_url(); ?>assets/img/logo.png"  height="30" alt="Logo light">
      </a>
      <a href="<?= base_url(); ?>ade_controllers/beranda/index"><button type="button" class="btn btn-info ml-3 mr-2" >Home</button></a>

        <?php if(isset($_SESSION["username"])){?>

        <a class="btn btn-danger mx-2" href="/Login/Logout">Logout</a>
        <?php } ?>
     
       <!--   <?php if(isset($_SESSION["username"])){?>
        <a class="btn btn-danger mr-2" href="/Login/Logout">Logout</a>
      <?php } else {?>
        <a class="btn btn-primary" href="index.php/Login">Login</a>
      <?php } ?> -->
      <!-- <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Features</a>
        <a class="p-2 text-dark" href="#">Enterprise</a>
        <a class="p-2 text-dark" href="#">Support</a>
        <a class="p-2 text-dark" href="#">Pricing</a>
      </nav> -->
  
    </div>
	<div class="container">
		<div class="row">
			<div class="col">
				<div>
					<h1 class="mt-4" style="text-align:center;"><?php echo $post['Judul']?></h1>
					<p class="mt-1" style="text-align:center; "><?php echo $post['Waktu']?></p>
				</div>
				
				<div>
					 <!-- <img class="bd-placeholder-img card-img-top" width="400" height="220" src="<?= base_url(); ?>assets/ade/img/<?php echo $post->Foto?>"> </img> -->
					<img class="d-block mx-auto mb-4"  width="800" height="400" src="<?= base_url(); ?>assets/ade/img/<?php echo  $post['Foto']?>"?>
				</div>
				<div>
					<p><?php echo $post['Caption']?></p>
				</div>
			</div>
		</div>
		
	</div>
	
</body>
</html> 














