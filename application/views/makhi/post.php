<div class="container mb-4">
    <div class="row">
        <div class="col-8">
            <div class="header mt-5 text-center mb-4">
                <!-- <h5 class=""><?= $post['datecreated'] ?></h5> -->
                <h2><?= $post['title'] ?></h2>
            </div>
            <div class="image text-center mt-3">
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

        <div class="col border p-0" style="margin-top: 100px;">
            <?php $i = 0;
            foreach ($posts as $a) :
                if ($i < 4) : ?>
                    <div class="card mb-3" style="width: fit;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <?php if ($a['pic'] == NULL) : ?>
                                    <img src="<?= base_url(); ?>assets/makhi/img/scholarship.jpg" alt="..." height="100%" width="125px">
                                <?php else : ?>
                                    <img src="<?= base_url(); ?>assets/makhi/img/upload/<?= $a['pic'] ?>" alt="..." height="100%" width="155px">
                                <?php endif; ?>

                            </div>
                            <div class="col-md-8 border">
                                <div class="card-body">
                                    <a href="">
                                        <span><?= $a['title'] ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                    $i++;
                endif;
            endforeach; ?>

        </div>
    </div>
</div>