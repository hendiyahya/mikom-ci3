<!DOCTYPE html>  
<head>
  <?php $this->load->view("alghi/partials/head.php") ?>
</head>
<body>
<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>DASHBOARD</h2></div>
                    <div class="col-sm-4">
                        <a href="<?php echo site_url('alghi/AddNew') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Post Baru</a>
                        <a href="<?php echo site_url('alghi/Home') ?>" class="btn btn-primary"><i class="fas fa-plus"></i>
                        Kembali</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Isi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                  <?php foreach ($posts as $post) : ?>
                    <tr>
                        <td><?php echo $post->Judul ?></td>
                        <td><?php echo $post->Kategori ?></td>
                        <td><?php echo $post->Isi ?></td>
                        <td><a href="<?php echo base_url('/alghi/AddNew/edit/')?><?php echo $post->id_posts ?>" >Edit</a> 
                            <a href="<?php echo base_url('/alghi/AddNew/delete/')?><?php echo $post->id_posts ?>">Hapus</a>
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
