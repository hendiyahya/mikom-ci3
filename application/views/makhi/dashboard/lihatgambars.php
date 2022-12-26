<div class="container">
    <div class="row">
        <div class="col-md-6">
            <?php foreach ($images as $img) : ?>
                <img src="<?= base_url() . 'assets/makhi/img/upload/' . $img['image'] ?>" alt="gambar">
                <a href="<?= base_url() . 'makhi/dashboard/edit_image/' . $img['id'] ?>" class="btn btn-warning">Edit</a>
                <a href="<?= base_url() . 'makhi/dashboard/delete_image/' . $img['id'] ?>" class="btn btn-danger">Delete</a>
            <?php endforeach; ?>
        </div>
    </div>
</div>