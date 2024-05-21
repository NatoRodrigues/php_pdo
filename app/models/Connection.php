<?php 

namespace app\models;

use PDO;

class Connection {

    public static function connect(){
        $pdo = new PDO("mysql:dbname=test;charset=UTF8", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // se der algum erro no PDO, exibe ele na tela.
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // Trabalhar com as variaveis na instância como objetos. e não como arrays

        return $pdo;
    }
}

?>