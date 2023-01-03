<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

    <div class="container">
        <div class="row">
            <div class="col-lg-8 mt-3">

                <form action="<?= base_url(); ?>makhi/dashboard/edit/<?= $post['id']; ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $post['id']; ?>">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="title" value="<?= $post['title']; ?>">
                        <?= form_error('title', '<small class="text-danger text-left">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="body">Body</label>
                        <input id="x" type="hidden" name="body" value="<?= $post['body']; ?>">

                        <trix-editor input="x"></trix-editor>
                        <?= form_error('body', '<small class="text-danger text-left">', '</small>'); ?>
                    </div>

                    <input type="hidden" name="excerpt" value="<?= $post['excerpt'] ?>">

                    <div class="form-group">
                        <label for="photo">Add Photo</label> <br>
                        <input type="file" class="form-control" id="preview_gambar" name="gambar" value="<?= $post['pic'] ?>">
                        <h3><?= $post['pic'] ?></h3>
                    </div>

                    <div class="form-group">
                        <img src="<?= base_url(); ?>assets/makhi/img/upload/<?= $post['pic'] ?>" alt="" width="400px" id="gambar_load">
                    </div>

                    <a class="btn btn-success" href="<?= base_url(); ?>makhi/dashboard"><i class="bi bi-arrow-left"></i>Back</a>
                    <button class="btn btn-primary float-right" type="submit">Edit</button>
                </form>
            </div>
        </div>
    </div>

</main>