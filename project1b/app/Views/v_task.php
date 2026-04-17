<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= esc($title) ?></title>
</head>
<body>
<h1><?= esc($title) ?></h1>

<p>Data berikut berasal dari tabel <code>tasks</code> yang telah dibuat lewat migration dan diisi lewat seeder.</p>

<?php if (empty($tasks)): ?>
  <p>Belum ada task.</p>
<?php else: ?>
  <ul>
    <?php foreach ($tasks as $task): ?>
      <li>
        <strong><?= esc($task['name']) ?></strong>
        <?php if (! empty($task['description'])): ?>
          - <?= esc($task['description']) ?>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>

</body>
</html>
