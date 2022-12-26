
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Home</title>
	<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<!-- 	<style>
		a, button,input[type=submit],input[type=reset] {
	    font-family: sans-serif;
	    font-size: 12px;
	    background: blue;
	    color: white;
	    border: white 3px solid;
	    border-radius: 5px;
	    padding: 12px 20px;
	    margin-top: 10px;
		}
		a {
	    text-decoration: none;
		}
		a:hover, button:hover{
	    opacity:0.9;
		}
	</style> -->
</head>
<body>
   <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <a class="my-0 mr-md-auto font-weight-normal" href="../../../../index.php">
        <img class="navbar-brand-dark common" src="<?= base_url(); ?>assets/img/logo.png"  height="30" alt="Logo light">
      </a>
      <a href="/"><button type="button" class="btn btn-info mr-2" >Landing Page</button></a>
	  <a  href="<?= base_url(); ?>ade_controllers/beranda/index"><button type="button" class="btn btn-info mr-2" >Home</button></a>
	  
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
	<div class="container">
		<div class="row">
			<div class="col">
				<div>
					<h1 class="mt-5" style="text-align:center;"><?php echo $queryNgabdiDetail->Judul?></h1>
					<p style="text-align:center;"><?php echo $queryNgabdiDetail->Waktu?></p>
				</div>
				<div>
					<img class="d-block mx-auto mb-4" src="<?= base_url(); ?>assets/img/.."  src="<?= base_url(); ?>a" width="800" height="400">
				</div>
				<div>
					<p><?php echo $queryNgabdiDetail->Caption?></p>
				</div>
			</div>
		</div>
		
	</div>
</body>
</html> 














