<div class="container mb-4">
    <div class="row">
        <div class="col-8">
            <div class="header mt-5 text-center mb-4">
                <!-- <h5 class=""><?= $post['datecreated'] ?></h5> -->
                <h2><?= $post['title'] ?></h2>
            </div>
            <div class="image text-center mt-3">
                <?php if ($post['pic'] == NULL) : ?>
                    <img src="<?= base_url(); ?>assets/makhi/img/scholarship.jpg" alt="gambar" class="w-75">
                <?php else : ?>
                    <img src="<?= base_url(); ?>assets/makhi/img/upload/<?= $post['pic'] ?>" alt="gambar" class="w-75">
                <?php endif; ?>

            </div>
            <div class="content mt-4">
                <p><?= $post['datecreated'] ?></p>
                <p><?= $post['body'] ?></p>
            </div>
        </div>

        <div class="col p-0" style="margin-top: 100px; margin-left: 50px;">
            <h3 class="text-monospace">Artikel lainnya</h3>
            <?php $i = 0;
            foreach ($random as $a) :
                if ($i < 4) : ?>
                    <a href="<?= base_url() ?>makhi/home/detail/<?= $a['id'] ?>">
                        <div class="card mb-3" style="width: fit; height: 80px;">
                            <div class="row no-gutters" style="height: 80px;">
                                <div class="col-md-4">
                                    <?php if ($a['pic'] == NULL) : ?>
                                        <img src="<?= base_url(); ?>assets/makhi/img/scholarship.jpg" alt="..." height="100%" width="110px">
                                    <?php else : ?>
                                        <img src="<?= base_url(); ?>assets/makhi/img/upload/<?= $a['pic'] ?>" alt="..." height="100%" width="110px">
                                    <?php endif; ?>

                                </div>
                                <div class="col-md-8 border" style="height: 80px;">
                                    <div class="card-body" style="padding: 10px 0px 0px 10px;">
                                        <!-- <a href="<?= base_url() ?>makhi/home/detail/<?= $a['id'] ?>"> -->
                                        <span style="font-size: 10px;"><?= $a['title'] ?></span>
                                        <!-- </a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
            <?php
                    $i++;
                endif;
            endforeach; ?>

        </div>
    </div>
</div>