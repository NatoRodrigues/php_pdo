<?php 
// Verifica se o formulário foi enviado

use app\models\User;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    // Cria uma instância do seu modelo
    $model = new User(); // Substitua 'SeuModelo' pelo nome da classe do seu modelo
    
    // Obtém os dados do formulário
    $id = $_POST['user_id']; // Supondo que o ID do usuário seja enviado via formulário
    $data = [
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ];

    // Chama o método update do modelo para atualizar os dados do usuário no banco de dados
    try {
        $model->update($id, $data);
        echo 'atualizado com sucesso'; // Redireciona para uma página de sucesso
        exit();
    } catch (Exception $e) {
        echo 'Erro ao atualizar usuário: ' . $e->getMessage();
    }
}


?>