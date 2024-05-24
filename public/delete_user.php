<?php // Verifica se o formulário foi enviado
require '../bootstrap.php';

use app\models\User;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    // Cria uma instância do seu modelo
    $model = new User(); // Substitua 'SeuModelo' pelo nome da classe do seu modelo
    
    // Obtém o ID do usuário a ser excluído
    $id = $_POST['user_id']; // Supondo que o ID do usuário seja enviado via formulário
    
    // Chama o método delete do modelo para excluir o usuário do banco de dados
    try {
        $model->delete($id);
        echo 'deletado com sucesso'; // Redireciona para uma página de sucesso
        exit();
    } catch (Exception $e) {
        echo 'Erro ao excluir usuário: ' . $e->getMessage();
    }
}
?>