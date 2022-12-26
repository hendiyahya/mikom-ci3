<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Page Post</h1>
    </div>

    <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

    <h2><?= $user['username']; ?>'s Posts</h2>

    <div class="row">
        <div class="col-lg-11">
            <a class="btn btn-primary mb-3" href="<?= base_url(); ?>makhi/dashboard/create">Buat Post</a>

            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <?= $this->session->flashdata('success'); ?>

                    <thead>
                        <tr>
                            <th>No</th>
                            <th width="30%">Title</th>
                            <th width="50%">Content</th>
                            <th class="text-center" width="20%"> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($posts as $post) : ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $post['title']; ?></td>
                                <td class="text-wrap"><?= $post['excerpt'] ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url(); ?>makhi/dashboard/detail/<?= $post['id'] ?>" class="badge badge-success">lihat</a>

                                    <a href="<?= base_url(); ?>makhi/dashboard/edit/<?= $post['id'] ?>" class="badge badge-warning">edit</a>

                                    <a href="<?= base_url(); ?>makhi/dashboard/hapus/<?= $post['id'] ?>" class="badge badge-danger" onclick="return confirm('yakin menghapus data <?= $post['title']; ?>?');">hapus</a>
                                </td>
                            </tr>
                        <?php $no = $no + 1;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>