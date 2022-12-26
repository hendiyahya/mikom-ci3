<form class="form-signin" method="POST" action="">
    <div class="card">
        <div class="card-header">
            <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
        </div>
        <div class="card-body">
            <label for="name" class="sr-only">Name</label>
            <input name="name" type="name" id="name" class="form-control" placeholder="Name" autofocus>
            <?= form_error('name', '<small class="text-danger text-left">', '</small>'); ?>

            <!-- 
            <label for="username" class="sr-only">Username</label>
            <input name="username" type="username" id="username" class="form-control" placeholder="Username" > 
            -->

            <label for="email" class="sr-only">Email address</label>
            <input name="email" type="email" id="email" class="form-control" placeholder="Email">
            <?= form_error('email', '<small class="text-danger text-left">', '</small>'); ?>

            <label for="password" class="sr-only">Password</label>
            <input name="password" type="password" id="password" class="form-control" placeholder="Password">
            <?= form_error('password', '<small class="text-danger text-left">', '</small>'); ?>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
        </div>
        <p> Already registered? <a href="<?= base_url(); ?>makhi/auth">Login Now!</a></p>
    </div>
</form>