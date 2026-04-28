<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBlog</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">MyBlog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/post') ?>">Blog</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?= base_url('admin/post/new') ?>"
                           class="btn btn-primary mr-3">New Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/setting') ?>">Setting</a>
                    </li>
                    <!-- update nav -->
                     <li class="nav-item">
                        <?php if (logged_in()) : ?>
                            <a class="nav-link" href="<?= base_url('logout') ?>">Logout</a>
                        <?php else: ?>
                            <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container py-5">
            <h1 class="display-5 fw-bold">Blog > Admin</h1>
        </div>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($posts as $post): ?>
                <tr>
                    <td><?= $post['id'] ?></td>
                    <td>
                        <strong><?= $post['title'] ?></strong><br>
                        <small class="text-muted"><?= $post['created_at'] ?></small>
                    </td>
                    <td>
                        <?php if($post['status'] === 'published'): ?>
                        <small class="text-success"><?= $post['status'] ?></small>
                        <?php else: ?>
                        <small class="text-muted"><?= $post['status'] ?></small>
                        <?php endif ?>
                    </td>
                    <td>
                        <a href="<?= base_url('admin/post/'.$post['id'].'/preview') ?>"
                           class="btn btn-sm btn-outline-secondary" target="_blank">Preview</a>
                        <a href="<?= base_url('admin/post/'.$post['id'].'/edit') ?>"
                           class="btn btn-sm btn-outline-secondary">Edit</a>
                        <a href="#"
                           data-href="<?= base_url('admin/post/'.$post['id'].'/delete') ?>"
                           onclick="confirmToDelete(this)"
                           class="btn btn-sm btn-outline-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <!-- Modal Konfirmasi Delete -->
        <div id="confirm-dialog" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2 class="h2">Are you sure?</h2>
                        <p>The data will be deleted and lost forever</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#" role="button" id="delete-button"
                           class="btn btn-danger">Delete</a>
                        <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function confirmToDelete(el) {
                document.getElementById("delete-button")
                    .setAttribute("href", el.dataset.href);
                var myModal = new bootstrap.Modal(
                    document.getElementById('confirm-dialog'), {
                    keyboard: false
                });
                myModal.show();
            }
        </script>
    </div>

    <div class="container py-4">
        <footer class="pt-3 mt-4 text-muted border-top">
            <div class="container">
                &copy; <?= Date('Y') ?>
            </div>
        </footer>
    </div>

    <!-- jQuery dan Bootstrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>

</body>
</html>
