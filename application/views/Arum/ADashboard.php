
<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/arum/css/AStyle.css">
        <!-- Link font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">	
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">	
        <title>Pengelolaan Post</title>

	</head>
	<body>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-white bg-white nav fixed-top  border-bottom shadow-sm">
            
        <div class="container">
            <!-- logo -->
            <img src="<?= base_url(); ?>assets/arum/img/logo.png" width="120px">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <!-- button home -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>"><svg width="25px" viewBox="0 0 16 16" class="bi bi-journals" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path d="M3 2h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2z"/>
						<path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2zM1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
						</svg> Home</a>
					</li>					
					
                    <!-- nampilin nama user -->
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <svg width="25px" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                            <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                          </svg> 
                          <?php if(isset($_SESSION["username"])){?>
                         <span><?php echo ucfirst($this->session->userdata('username')); ?></span>
                        <?php } ?>
                        </a>
						</li>
					
					<!-- button logout -->
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url(); ?>/Login/Logout"><svg width="25px" viewBox="0 0 16 16" class="bi bi-person-x-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
						</svg> LogOut</a>
					</li>
                </ul>
            </div>
        </div>
	    </nav>
	<!-- CLOSE NAVBAR -->

    <br><br><br><br>

    <!-- konten -->
    <div class="container">

        <!-- button Back to Home -->
        <a href="<?= base_url(); ?>arum/home/index"><button class="button button1">Back</button></a>
        <br>
        <br>
        <h1 class="mb-3 text-center" style="color: white;"><b>Halaman Pengelolaan Post</b> </h1>
        <div class="container col-md-12 mt-4">
		
        <!-- form -->
		<div class="card">
			<div class="card-header bg-white text-black text-center "><strong>
				Kumpulan Artikel</strong> <a href="<?= base_url(); ?>arum/post" class="btn btn-sm btn-primary float-right">Tambah</a>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Judul</th>
                            <th>Gambar</th>
							<th>Keterangan</th>
							
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>

                    <?php 
                     $no = 1;
                    foreach( $posts as $row) : ?>

					<tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $row["nama"];?></td>
                        <td><img class="shop-item-image" src="<?= base_url(); ?>assets/arum/img/<?php echo $row["gambar"];?>"></td>

                        <td><?php echo $row["ket"];?></td>
                        <td>
                            <a href="<?= base_url(); ?>arum/post/edit/<?php echo $row["id"];?>" class="btn btn-warning">Edit</a>
                            <a href="<?= base_url(); ?>arum/post/hapus/<?php echo $row["id"];?>" class="btn btn-danger">Hapus</a>

                        </td>
                    </tr>
                    <?php 
                    $no++;
                     endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	    </div>
        
    </div>
    <br><br><br>

        <script src="js/menu.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>
