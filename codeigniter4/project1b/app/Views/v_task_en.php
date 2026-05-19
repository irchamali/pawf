<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= esc($title) ?></title>
</head>
<body>
<h1><?= esc($title) ?></h1>

<p>The following data comes from the <code>tasks</code> table created through migration and filled using seeder.</p>

<?php if (empty($tasks)): ?>
  <p>No tasks found yet.</p>
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
