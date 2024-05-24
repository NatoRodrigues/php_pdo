<?php
// Inclui o bootstrap.php para inicializar sua aplicação
require_once __DIR__ . '/../../bootstrap.php';

use app\models\User;

// Cria uma instância do modelo de usuário
$model = new User(); 

// Obtém todos os usuários do banco de dados
$users = $model->all();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Usuário</title>
</head>
<body>
    <h2>Excluir Usuário</h2>
    <form action="delete_user.php" method="POST">
        <label for="user_id">Selecione o usuário a ser excluído:</label><br>
        <select name="user_id" id="user_id">
            <?php foreach ($users as $user): ?>
                <option value="<?php echo $user->id; ?>">
                    <?php echo htmlspecialchars($user->username); ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>
        
        <input type="submit" name="delete" value="Excluir">
    </form>
</body>
</html>
