<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view("alghi/partials/head.php") ?>
</head>
<body>
  <div class="col-11 mx-auto">
<form action="<?php echo site_url('alghi/AddNew/Add') ?>" method="post" enctype="multipart/form-data" >
  <div class="form-group">
    <label for="IsiJudul">Judul</label>
    <input name="Judul" type="text" class="form-control" id="IsiJudul"placeholder="Isi Judul">
  </div>
</div>
  <div class="col-11 mx-auto">
  <div class="form-group">
    <label for="IsiKategori">Kategori</label>
    <input name="Kategori" type="text" class="form-control" id="IsiKategori" placeholder="Kategori">
  </div>
</div>
  <div class="col-11 mx-auto">
  <div class="form-group">
    <label for="IsiKonten">Isi</label>
    <textarea name="Isi" type="text" class="form-control" id="IsiKonten" placeholder="Konten"></textarea>
    <!-- <input name="Isi" type="text" class="form-control" id="IsiKonten" placeholder="Konten"> -->
  </div>
</div>
  <div class="col-11 mx-auto">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</body>
</html>