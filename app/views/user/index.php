<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User List</title>
</head>
<body>
<h1>All Users</h1>

<?php if (!empty($data['users'])): ?>
    <ul>
        <?php foreach ($data['users'] as $user): ?>
            <li>
                <strong><?= htmlspecialchars($user['name']) ?></strong>
                (<?= htmlspecialchars($user['email']) ?>)
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No users found.</p>
<?php endif; ?>
</body>
</html>
