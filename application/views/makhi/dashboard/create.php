<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

    <div class="container">
        <div class="row">
            <div class="col-lg-8 mt-3">

                <form action="<?= base_url(); ?>makhi/dashboard/create" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="title" value="<?= set_value('title'); ?>">
                        <?= form_error('title', '<small class="text-danger text-left">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="body">Body</label>
                        <input id="x" type="hidden" name="body">
                        <trix-editor input="x"></trix-editor>
                        <?= form_error('body', '<small class="text-danger text-left">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="photo">Add Photo</label> <br>

                        <input type="file" class="form-control" id="preview_gambar" name="gambar">
                    </div>

                    <div class="form-group">
                        <img src="" alt="" width="400px" id="gambar_load">
                    </div>

                    <a class="btn btn-success" href="<?= base_url(); ?>makhi/dashboard"><i class="bi bi-arrow-left"></i>Back</a>
                    <button class="btn btn-primary float-right" type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>

</main>