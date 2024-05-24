<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <form action="create_user.php" method="POST">
        <label for="username">Nome de Usuário:</label><br>
        <input type="text" id="username" name="username"><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password"><br><br>
        
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
