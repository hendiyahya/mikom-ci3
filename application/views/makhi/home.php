<div id="carouselExampleCaptions" class="container carousel slide bg-light shadow" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="<?= base_url() ?>makhi/home/detail/<?= $posts[0]['id'] ?>">
                <img src="<?= base_url(); ?>assets/makhi/img/scholarship.jpg" class="d-block mx-auto" alt="..." width="600">
                <div class="carousel-caption d-md-block m-auto" style="width: 30%;">
                    <h5 class="text-dark"><?= $posts[0]['title'] ?></h5>
                    <!-- <p>Some representative placeholder content for the first slide.</p> -->
                </div>
            </a>
        </div>
        <div class="carousel-item">
            <a href="<?= base_url() ?>makhi/home/detail/<?= $posts[1]['id'] ?>">
                <img src="<?= base_url(); ?>assets/makhi/img/scholarship.jpg"" class=" d-block mx-auto" alt="..." width="600">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-dark"><?= $posts[1]['title'] ?></h5>
                    <!-- <p>Some representative placeholder content for the second slide.</p> -->
                </div>
            </a>
        </div>
        <div class="carousel-item">
            <a href="<?= base_url() ?>makhi/home/detail/<?= $posts[0]['id'] ?>">
                <img src="<?= base_url(); ?>assets/makhi/img/scholarship.jpg"" class=" d-block mx-auto" alt="..." width="600">
                <div class="carousel-caption d-none d-md-block m-auto" style="width: 30%;">
                    <h5 class="text-dark"><?= $posts[2]['title'] ?></h5>
                    <!-- <p>Some representative placeholder content for the third slide.</p> -->
                </div>
            </a>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
        <span class="carousel-control-prev-icon bg-dark h-25" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
        <span class="carousel-control-next-icon bg-dark h-25" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
</div>

<div class="container mt-4">

    <div class="row">
        <?php $index = 3;
        foreach ($posts as $post) :
            if ($index <= 5) : ?>
                <div class="col-4 mb-3 mt-4">
                    <div class="card" style="height: 32rem">
                        <img src="<?= base_url(); ?>assets/makhi/img/scholarship.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $post['title'] ?></h5>
                            <p class="card-text"><?= $post['datecreated'] ?></p>
                            <p class="card-text"><?= $post['excerpt'] ?></p>
                        </div>
                        <a href="<?= base_url() ?>makhi/home/detail/<?= $post['id'] ?>" class="btn btn-primary">See more</a>
                    </div>
                </div>
        <?php $index++;
            endif;
        endforeach; ?>
    </div>

    <div class="row">

        <?php foreach ($posts as $post) : ?>
            <div class="card mb-4">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= base_url(); ?>assets/makhi/img/scholarship.jpg" alt="..." height="100%" width="380px">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $post['title'] ?></h5>
                            <p class="card-text"> <?= $post['excerpt'] ?></p>
                            <p class="card-text"><small class="text-muted"><?= $post['datecreated'] ?></small></p>
                            <a href="<?= base_url() ?>makhi/home/detail/<?= $post['id'] ?>" class="btn btn-primary">See more</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>