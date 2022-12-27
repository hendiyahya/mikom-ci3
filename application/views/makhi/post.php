<div class="container">
    <div class="row">
        <div class="col">
            <div class="header mt-5 text-center">
                <!-- <h5 class=""><?= $post['datecreated'] ?></h5> -->
                <h2><?= $post['title'] ?></h2>
            </div>
            <div class="image text-center">
                <?php if ($post['pic'] == NULL) : ?>
                    <img src="<?= base_url(); ?>assets/makhi/img/scholarship.jpg" alt="gambar" class="w-50">
                <?php else : ?>
                    <img src="<?= base_url(); ?>assets/makhi/img/upload/<?= $post['pic'] ?>" alt="gambar" class="w-50">
                <?php endif; ?>

            </div>
            <div class="content mt-4">
                <p><?= $post['datecreated'] ?></p>
                <p><?= $post['body'] ?></p>
            </div>
        </div>
    </div>
</div>