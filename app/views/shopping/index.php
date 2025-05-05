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
                <form action="/list" method="post">
                    <!-- PATCH method override -->
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($item['id']) ?>">

                    <input type="text" name="name" value="<?= htmlspecialchars($item['name']) ?>">
                    <input type="text" name="checked" value="<?= htmlspecialchars($item['checked']) ?>">

                    <button type="submit">Update</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No items found.</p>
<?php endif; ?>
</body>
</html>
