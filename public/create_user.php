
<?php

use app\models\User;

require '../bootstrap.php';
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Cria uma instância do seu modelo
    $model = new User();  
    
    // Chama o método create do modelo para inserir os dados no banco de dados
    $data = [
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ];

    // Chama o método create do modelo e redireciona conforme necessário
    try {
        $model->create($data);
        echo 'user cadastrado com sucesso'; // Redireciona para uma página de sucesso
        exit();
    } catch (Exception $e) {
        echo 'Erro ao cadastrar usuário: ' . $e->getMessage();
    }
} else {
    // Se o formulário não foi enviado, redireciona de volta para o formulário
    header('Location: create_view.php');
    exit();
}
?>


?>