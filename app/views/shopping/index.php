<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1em;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 0.5em;
            text-align: left;
        }
        form.inline {
            display: inline;
        }
    </style>
</head>
<body>
<h1>Shopping List</h1>

<!-- Add Item Form -->
<form action="/list" method="POST">
    <input type="text" name="name" placeholder="Enter new item name" required>
    <input type="submit" value="Add">
</form>

<?php if (!empty($data['items'])): ?>
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Shopped</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data['items'] as $item): ?>
            <tr>
                <td>
                    <form action="/list" method="POST" class="inline">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="id" value="<?= htmlspecialchars($item['id']) ?>">
                        <input type="text" name="name" value="<?= htmlspecialchars($item['name']) ?>">
                </td>
                <td>
                    <input type="checkbox" name="checked" value="1" <?= $item['checked'] ? 'checked' : '' ?>>
                </td>
                <td>
                    <input type="submit" value="Update">
                    </form>
                    <form action="/list" method="POST" class="inline">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="id" value="<?= htmlspecialchars($item['id']) ?>">
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No items found.</p>
<?php endif; ?>
</body>
</html>
