<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuários</title>
</head>
<body>
    <h2>Listar Usuários</h2>
    <?php if (!empty($users)): ?>
        <?php foreach ($users as $user): ?>
            <p>ID: <?php echo htmlspecialchars($user->id); ?></p>
            <p>Nome: <?php echo htmlspecialchars($user->username); ?></p>
            <p>Email: <?php echo htmlspecialchars($user->email); ?></p>
            <hr>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Nenhum usuário encontrado.</p>
    <?php endif; ?>
</body>
</html>
