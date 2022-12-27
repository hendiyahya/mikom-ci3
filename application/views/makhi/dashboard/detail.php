<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

    <div class="container mt-4">
        <div class="col-lg-8">
            <h3><?= $post['title'] ?></h3>
            <p><?= $post['datecreated'] ?></p>
            <?php if ($post['pic'] == NULL) : ?>
                <img src="<?= base_url(); ?>assets/makhi/img/scholarship.jpg" alt="" height="300px">
            <?php else : ?>
                <img src="<?= base_url(); ?>assets/makhi/img/upload/<?= $post['pic'] ?>" alt="" height="300px">
            <?php endif; ?>

            <div class="col-md-5 mb-4 mt-3">
                <a href="<?= base_url(); ?>makhi/dashboard" class="btn btn-success">back</a>

                <a href="<?= base_url(); ?>makhi/dashboard/edit/<?= $post['id'] ?>" class="btn btn-warning">edit</a>

                <a href="<?= base_url(); ?>makhi/dashboard/hapus/<?= $post['id'] ?>" class="btn btn-danger" onclick="return confirm('yakin menghapus data <?= $post['title']; ?>?');">hapus</a>
            </div>
            <p><?= $post['body'] ?></p>
        </div>
    </div>
</main>