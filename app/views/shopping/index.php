<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping List</title>
</head>
<body>
<h1>Shopping List</h1>

<!-- Add Item Form -->
<form action="/list" method="POST">
    <input type="text" name="name" placeholder="Enter new item name" required>
    <input type="submit" value="Add">
</form>

<?php if (!empty($data['items'])): ?>
    <ul>
        <?php foreach ($data['items'] as $item): ?>
            <li>
                <form action="/list" method="POST">
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($item['id']) ?>">
                    <input type="text" name="name" value="<?= htmlspecialchars($item['name']) ?>">
                    <input type="checkbox" name="checked" value="1" <?= $item['checked'] ? 'checked' : '' ?>>
                    <input type="submit" value="Update">
                </form>
                <form action="/list" method="POST" style="display:inline;">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($item['id']) ?>">
                    <input type="submit" value="Delete">
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No items found.</p>
<?php endif; ?>
</body>
</html>
