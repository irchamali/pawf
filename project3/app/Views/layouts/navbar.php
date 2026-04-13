<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">MyBlog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
			<a class="nav-link" href="<?= base_url('about') ?>">About</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?= base_url('post') ?>">Blog</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a>
		</li>
        
      </ul>
      <form class="d-flex" role="search">
        <button class="btn btn-outline-success" type="submit">
        <?php if (logged_in()) : ?>
            <a class="nav-link" href="<?= base_url('logout') ?>">Logout</a>
            <?php else: ?>
            <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
        <?php endif; ?> 
        </button>
      </form>
    </div>
  </div>
</nav>