<?php

namespace app\models;
require '../bootstrap.php';

use PDO;
use PDOException;

class Connection {

    public static function connect(){
        // Carrega as configurações do banco de dados do arquivo database.php
        $config = require_once __DIR__ . '/../../config.php';


        // Obtém as configurações do banco de dados do array $config
         
         
        try {
            // Cria uma conexão PDO usando as configurações obtidas do array $config
            $pdo = new PDO("mysql:host={$config['db']['host']};
                           dbname={$config['db']['db_name']};
                           charset=utf8", 
                           $config['db']['username'], 
                           $config['db']['password']);
            
            // Define os atributos da conexão PDO
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Se ocorrer algum erro no PDO, exibe-o na tela.
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // Define o modo de retorno padrão para objetos.
            $pdo->exec("USE {$config['db']['db_name']}");
            return $pdo;
        } catch(PDOException $e) {
            // Se ocorrer um erro, exibe a mensagem de erro
            echo "Erro na conexão: " . $e->getMessage();
        }
    }
}

?>
