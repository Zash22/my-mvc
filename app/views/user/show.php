<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Detail</title>
</head>
<body>
<h1>User Details</h1>

<?php $user = $data['user']; ?>

<p><strong>ID:</strong> <?= htmlspecialchars((string)$user['id']) ?></p>
<p><strong>Name:</strong> <?= htmlspecialchars($user['name']) ?></p>
<p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
</body>
</html>
