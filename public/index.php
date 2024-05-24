<?php

require '../vendor/autoload.php';

use app\classes\Uri;
use app\classes\Routes;

$routes = [
    '/' => '../app/controllers/index_controller.php',
    '/create' => '../app/controllers/create_controller.php',
    '/update' => '../app/controllers/update_controller.php',
    '/delete' => '../app/controllers/delete_controller.php',
    '/read' => '../app/controllers/read_controller.php'
];

$uri = Uri::load_uri();

try {
    $route = Routes::load_routes($routes, $uri);
} catch (Exception $e) {
    echo '<h1>Erro</h1>';
    echo '<p>' . $e->getMessage() . '</p>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <nav>
        <h1>Menu</h1>
        <ul>
            <li><a href="/create">Criar</a></li>
            <li><a href="/read">Ler</a></li>
            <li><a href="/update">Atualizar</a></li>
            <li><a href="/delete">Deletar</a></li>
        </ul>
    </nav>

    <?php require Routes::load_routes($routes, $uri); ?>
</body>
</html>