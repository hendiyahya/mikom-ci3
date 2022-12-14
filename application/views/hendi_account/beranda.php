<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

<head>
	<?php $this->load->view("hendi_admin/_partials/head.php") ?>
</head>

    <body>
    <h1>Selamat Datang di Situs kami.</h1>
    <p>  
    Silakan klik link
    <?php echo anchor('login','Masuk'); ?>
    untuk masuk ke dalam sistem atau
    <?php echo anchor('register','Daftar'); ?>
    untuk mendaftar.
    </p>

    <div class="row justify-content-center">


  <!-- {{-- column 2 --}} -->
  <div class="column col-10">
    <h1 class="mb-3 text-center">Forum Ilmu Komputer</h1>
    


    <!-- @if ($posts->count()) -->
      <!-- <div class="card mb-3">
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        <div class="card-body text-center">
          <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
          <p>
            <small class="text-muted">
              By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
          </p>

          <p class="card-text">{{ $posts[0]->excerpt }}</p>

          <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>

        </div>
      </div> -->
    
    
    <div class="container">
      <div class="row">
        <?php foreach ($posts as $post) : ?>
          <div class="col-md-4 mb-3">
            <div class="card">
              <!-- <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div> -->
              
              

              
              <div class="card-body">
                <h5 class="card-title"><?php echo $post->title ?></h5>
                <p>
                  <small class="text-muted">
                    By. <a href=# class="text-decoration-none">Author</a> Date
                  </small>
                </p>
                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
      </div>
    </div>

    <!-- @else
      <p class="text-center fs-4">No post found.</p>
    @endif -->

    <div class="d-flex justify-content-end">
      <!-- {{ $posts->links() }} -->
    </div>

  </div>
</div>

   
</body>
</html>
