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
                <form action="/list" method="POST" style="display:inline-block; margin-right: 10px;">
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($item['id']) ?>">

                    <input type="text" name="name" value="<?= htmlspecialchars($item['name']) ?>">

                    <label>
                        <input type="checkbox" name="checked" value="1" <?= $item['checked'] == '1' ? 'checked' : '' ?>>
                        Checked
                    </label>

                    <button type="submit">Update</button>
                </form>

                <form action="/list" method="POST" style="display:inline-block;">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($item['id']) ?>">
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No items found.</p>
<?php endif; ?>
</body>
</html>
