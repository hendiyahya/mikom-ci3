<form class="form-signin" method="POST" action="">
    <div class="card">


        <?= $this->session->flashdata('success'); ?>
        <div class="card-header">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        </div>
        <div class="card-body">
            <label for="email" class="sr-only">Email address</label>
            <input name="email" type="email" id="email" class="form-control" placeholder="Email address" autofocus>
            <?= form_error('email', '<small class="text-danger text-left">', '</small>'); ?>

            <label for="password" class="sr-only">Password</label>
            <input name="password" type="password" id="password" class="form-control" placeholder="Password">
            <?= form_error('password', '<small class="text-danger text-left">', '</small>'); ?>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </div>
        <p> Don't have an account? <a href="<?= base_url(); ?>makhi/auth/register">Register Now!</a></p>
    </div>
</form>