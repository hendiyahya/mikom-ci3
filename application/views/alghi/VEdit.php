<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view("alghi/partials/head.php") ?>
</head>
<body>
  <div class="col-11 mx-auto">
<form action="<?php echo site_url('/alghi/AddNew/Update/') ?>" method="post" enctype="multipart/form-data" >
  <div class="form-group">
    <label for="IsiJudul">Judul</label>
    <input name="Judul" type="text" class="form-control" id="IsiJudul"placeholder="Isi Judul" value="<?php echo $post['Judul'] ?>">
    <input type="hidden" name="id_posts" value="<?php echo $post['id_posts'] ?>" />
  </div>
</div>
<div class="col-11 mx-auto">
  <div class="form-group">
    <label for="IsiKategori">Kategori</label>
    <input name="Kategori" type="text" class="form-control" id="IsiKategori" placeholder="Kategori" value="<?php echo $post['Kategori'] ?>">
    <input type="hidden" name="id_kategori" value="<?php echo $post['id_kategori'] ?>" />
  </div>
</div>
  <div class="col-11 mx-auto">
  <div class="form-group">
    <label for="IsiKonten">Isi</label>
    <textarea name="Isi" type="text" class="form-control" id="IsiKonten" placeholder="Konten" rows="20"><?php echo $post['Isi'] ?></textarea>
  </div>
</div>
  <br>
  <div class="col-11 mx-auto">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</body>
</html>