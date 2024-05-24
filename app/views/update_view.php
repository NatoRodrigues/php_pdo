<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Usuário</title>
</head>
<body>
    <h2>Atualizar Usuário</h2>
    <form action="update_user.php" method="POST">
        <input type="hidden" name="user_id" value="ID_DO_USUARIO_A_SER_ATUALIZADO">
        <label for="username">Nome de Usuário:</label><br>
        <input type="text" id="username" name="username"><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password"><br><br>
        
        <input type="submit" name="update" value="Atualizar">
    </form>
</body>
</html>
