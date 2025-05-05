<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping List</title>
</head>
<body>
<h1>Shopping List</h1>

<?php if (!empty($data['items'])): ?>
    <ul>
        <?php foreach ($data['items'] as $item): ?>
            <li>
                <strong><?= htmlspecialchars($item['name']) ?></strong>
                (<?= htmlspecialchars($item['checked']) ?>)
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No items found.</p>
<?php endif; ?>
</body>
</html>
