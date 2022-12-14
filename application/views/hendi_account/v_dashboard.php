<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>  
<head>
	<?php $this->load->view("hendi_account/_partials/head.php") ?>
</head>
<body>
<body id="page-top">


<div id="wrapper">
  <div class="row justify-content-center text-center my-4">
    <h3>Dashboard</h3>
    <p>
    Selamat datang di halaman dashboard, <?php echo ucfirst($this->session->userdata('username')); ?>!
    Untuk logout dari sistem, silakan klik <?php echo anchor('login/logout','di sini...'); ?>
    </p>
  </div>
  
  <?php if ($this->session->flashdata('success2')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success2'); ?>
				</div>
				<?php endif; ?>
  
  <div class="container-fluid">
    <!-- DataTables -->
    <div class="card mb-3">
      <div class="card-header">
      
        <a href="<?php echo site_url('hendi/Hendi_PostController/add') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Add New</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Judul</th>
                <!-- <th>Photo</th> -->
                <th>Konten</th>
                <!-- <th>Action</th> -->
              </tr>
            </thead>
            <tbody>
              <?php foreach ($posts as $post): ?>
              <tr>
                <td>
                  <?php echo $post->title ?>
                </td>
                <!-- <td>
                  <img src="<?php echo base_url('upload/post/'.$post->image) ?>" width="64" />
                </td> -->
                <td class="small">
                                        <?php echo substr($post->body, 0, 120) ?>...</td>
                <td width="250">
                 
                  <a href="<?php echo site_url('hendi/Hendi_PostController/edit/'.$post->id) ?>"
                  class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                  <a href="<?php echo site_url('hendi/Hendi_PostController/delete/'.$post->id) ?>"
                  href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                </td>
              </tr>
              <?php endforeach; ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>
</html>
