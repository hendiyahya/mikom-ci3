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

    

    <!-- Bootstrap core CSS -->
 <link href="<?= base_url(); ?>assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
<!-- <link href="<?= base_url(); ?>assets/css/offcanvas.css" rel="stylesheet"> -->
  </head>
  <body class="bg-light">
  	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <a class="my-0 mr-md-auto font-weight-normal" href="../../">
        <img class="navbar-brand-dark common" src="<?= base_url(); ?>assets/img/logo.png"  height="30" alt="Logo light">
      </a>
       <a><?php echo ucfirst($this->session->userdata('username')); ?></a>

       <a href="/"><button type="button" class="btn btn-info mr-2 ml-2" >Landing Page</button></a>
       <a href="beranda/index"><button type="button" class="btn btn-info mr-2" >Home</button></a>


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

  <div class="my-3 bg-white rounded shadow-sm">
		<div class="mb-4">
			<a href="<?php echo base_url('ade_controllers/tambah_post/halaman_tambah') ?>"><button class="btn btn-success"><b class="fa">Tambah Berita Pengabdian</b></button></a>
		</div>

    <table class="table">
  <thead class="thead-dark">
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
  <tbody>
    <tr >
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















