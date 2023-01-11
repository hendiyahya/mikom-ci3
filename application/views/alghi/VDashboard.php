<!DOCTYPE html>  
<head>
  <?php $this->load->view("alghi/partials/head.php") ?>
  <style> 

    th{
        text-align: center;
    }

    tr:nth-child(even){
        background-color: #f2f2f2;
    }

  </style>
</head>
<body>
<div class="container-lg mt-4">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-md-4"><h2>DASHBOARD</h2></div>
                    <div class="navbar-form col-md-4" >
            <?php echo form_open('alghi/home/search')?>
              <input type="text" name="keyword" class="form-control" placeholder="search">
              <button type="submit" class="btn btn-success">Cari</button>
            <?php echo form_close() ?>
          </div>
                    <div class="col-md-4">
                        <a href="<?php echo site_url('alghi/AddNew') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Post Baru</a>
                        <a href="<?php echo site_url('/alghi/Home') ?>" class="btn btn-primary"><i class="fas fa-plus"></i>
                        Kembali</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Isi</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  <?php foreach ($posts as $post) : ?>
                    <tr>
                        <td><?php echo $post->Judul ?></td>
                        <td><?php echo $post->Kategori ?></td>
                        <td><?php echo $post->Isi ?></td>
                        <td><a href="<?php echo base_url('/alghi/AddNew/edit/')?><?php echo $post->id_posts ?>" class="btn btn-primary" >Edit</a>
                        <td><a href="<?php echo base_url('/alghi/AddNew/delete/')?><?php echo $post->id_posts ?>" class="btn btn-primary">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>    
                </tbody>
            </table>
        </div>
    </div>
</div>   
</body>
</html>
