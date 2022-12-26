<div class="container mt-4" style="margin-left: 25  0px;">
    <div class="row">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Insert Gambar
                </div>
                <div class="card-body">
                    <form action="<?= base_url(); ?>makhi/dashboard/insert_image" enctype="multipart/form-data" method="post">
                        <input type="file" name="gambar" class="form-control mb-4">

                        <input type="submit" class="btn btn-primary" value="upload" name="submit">
                    </form>
                </div>
            </div>
            <a href="<?= base_url(); ?>makhi/dashboard/lihatgambar" class="btn btn-success">Page Lihat</a>
        </div>
    </div>
</div>