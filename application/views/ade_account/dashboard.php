<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Halaman Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/offcanvas/">
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
 <link href="<?= base_url(); ?>assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
<!-- <link href="<?= base_url(); ?>assets/css/offcanvas.css" rel="stylesheet"> -->
  </head>
  <body style="background-color:light">
  	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom shadow-sm" style="background-color:#E0FFFF">
      <a class="my-0 mr-md-auto font-weight-normal" href="/">
        <img class="navbar-brand-dark common" src="<?= base_url(); ?>assets/img/logo.png"  height="30" alt="Logo light">
      </a>
      <a><?php echo ucfirst($this->session->userdata('username')); ?>'s Post</a>


       <a href="beranda/index"><button type="button" class="btn btn-info ml-3 mr-2" >Home</button></a>


      <?php if(isset($_SESSION["username"])){?>
        <a class="btn btn-danger mr-2" href="/Login/Logout">Logout</a>
        <!-- <a class="btn btn-primary" href="/Login">Dashboard</a> -->
      <?php } ?>
      
      <!-- <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Features</a>
        <a class="p-2 text-dark" href="#">Enterprise</a>
        <a class="p-2 text-dark" href="#">Support</a>
        <a class="p-2 text-dark" href="#">Pricing</a>
      </nav> -->
  
    </div>
    

<main role="main" class="container">

  <div class="d-flex align-items-center p-8 my-3 bg-purple rounded shadow-sm">
    <h1> Data Pengabdian Mahasiswa Pada Masyarakat</h1>    
  </div>
  <div class="mb-4">
			<a href="<?php echo base_url('ade_controllers/tambah_post/halaman_tambah') ?>"><button class="btn btn-success" ><b class="fa">Tambah Berita Pengabdian</b></button></a>
		</div>

  <div class="my-3 bg-white rounded shadow-sm" >
		

    <table class="table" style="background-color:#E0FFFF" >
  <thead class="thead-dark" style="border-style: solid; border-color: black">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col">Waktu</th>
      <th scope="col">Caption</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  	<?php 
			$count = 0;
			foreach ($queryAllNgabdi as $row) {
				$count = $count + 1;
		 ?>
  <tbody >
    <tr style="border-style: solid; border-color: black" >
			<td  style="text-align:center;"><?php echo $count ?></td>
			<td><?php echo $row["Judul"] ?></td>
			<td style="text-align:center;"><?php echo $row["Waktu"] ?></td>
			<td style="text-align:justify;"><?php echo $row["Caption"] ?></td>
			<td><a href="<?php echo base_url('ade_controllers/edit_post/halaman_edit') ?>/<?php echo $row["ID"] ?>"><button class="btn btn-primary mr-2" ><b>Edit<b></button></a><a href="<?php echo base_url('ade_controllers/delete_post/fungsiDelete') ?>/<?php echo $row["ID"] ?>"><button class="btn btn-danger"><b>Delete<b></button></a></td>
		</tr>
		<?php } ?>
  </tbody>
</table>
        
</main>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
        <script src="offcanvas.js"></script>
  </body>
</html>















